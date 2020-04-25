<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\RequestInvoice;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use stdClass;

class MessageController extends Controller {
  public function getMessages($roomId) {
    return DB::table('messages')
      ->selectRaw('sender_id as senderId, message, created_at as createdAt')
      ->where('room_id', '=', $roomId)
      ->get();
  }

  public function sendMessage(Request $request) {
    $message = new Message;

    $message->room_id = $request->roomId;
    $message->sender_id = $request->senderId;
    $message->message = $request->message;

    $message->save();

    return response("success", 200);
  }

  public function requestInvoice(Request $request) {
    $user = session::get('profil');

    $email = $request->vendorEmail;

    $invoice = new stdClass();
    $invoice->vendorName = $request->vendorName;
    $invoice->customerName = $user[0]->nama1 . ' ' . $user[0]->nama2;

    Mail::to($email)->send(new RequestInvoice($invoice));

    return response("success", 200);
  }
}
