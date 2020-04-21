<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller {
  public function getMessages($roomId) {
    return DB::table('messages')
      ->selectRaw('sender_id as senderId, message, created_at as createdAt')
      ->where('room_id', '=', $roomId)
      ->get();
  }
}
