<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller {
  public function createOrder(Request $request) {
    $user = session::get('profil');

    $order = new Order();

    $order->vendor_id = $user[0]->id;
    $order->customer_id = $request->customerId;
    $order->event_type = $request->eventType;
    $order->event_theme = $request->eventTheme;
    $order->event_date = $request->eventDate;
    $order->notes = $request->notes;
    $order->transaction_amount = $request->transactionAmount;
    $order->transaction_status = "Menunggu Pembayaran";

    $order->save();

    return response("success", 200);
  }
}
