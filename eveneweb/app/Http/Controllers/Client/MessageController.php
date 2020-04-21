<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
