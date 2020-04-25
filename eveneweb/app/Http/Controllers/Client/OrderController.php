<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller {
  public function createOrder(Request $request) {
    $user = session::get('profil');

    $order = new Order();

    $transactionId = "INV".date("YmdHis").$user[0]->id.$request->customerId;

    $order->vendor_id = $user[0]->id;
    $order->customer_id = $request->customerId;
    $order->event_type = $request->eventType;
    $order->event_theme = $request->eventTheme;
    $order->event_date = $request->eventDate;
    $order->notes = $request->notes;
    $order->transaction_id = $transactionId;
    $order->transaction_amount = $request->transactionAmount;
    $order->transaction_status = "Menunggu Pembayaran";

    $order->save();

    return response("success", 200);
  }

  public function listVendorOrder() {
    $user = session::get('profil');
    $vendorId = $user[0]->id;

    $listOrder = DB::table('order')
      ->selectRaw("concat(users.nama1, ' ', users.nama2) as customerName, order.event_type as type, order.event_theme as theme, order.event_date as date, order.notes, order.transaction_amount as amount, order.transaction_status as status")
      ->join('users', 'order.customer_id', '=', 'users.id')
      ->where('vendor_id', '=', $vendorId)
      ->get();

    return view('account-orders')->with('orders', $listOrder);
  }

  public function listCustomerOrder() {
    $user = session::get('profil');
    $customerId = $user[0]->id;

    $listCart = DB::table('order')
      ->selectRaw("users.nama1 as vendorName, order.event_type as type, order.event_theme as theme, order.event_date as date, order.notes, order.transaction_id as id, order.transaction_amount as amount, order.transaction_status as status")
      ->join('users', 'order.vendor_id', '=', 'users.id')
      ->where('customer_id', '=', $customerId)
      ->get();

    return view('account-cart')->with('orders', $listCart);
  }
}
