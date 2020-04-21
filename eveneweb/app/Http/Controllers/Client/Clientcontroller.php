<?php

namespace App\Http\Controllers\Client;

use App\Message;
use App\MessageRoom;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;
use DB;
use str;
use App\Quotation;
use Carbon\Carbon;


class Clientcontroller extends Controller {
  public function home() {
    $data = session::get('profil');
    $spriceeo = db::select("call eosprice()");
    $spriceph = db::select("call phsprice()");
    $spricemu = db::select("call musprice()");
    $spricetd = db::select("call tdsprice()");
    $add = db::unprepared("call addcounter()");
    $blog = DB::table('blog')->orderBy('id', 'desc')->paginate(6);
    return view('home')->with('profil', $data)->with('list', $blog)->with('priceeo', $spriceeo)->with('priceph', $spriceph)->with('pricemu', $spricemu)->with('pricetd', $spricetd);
  }

  public function blog() {
    $data = session::get('profil');
    $blog = DB::table('blog')->orderBy('id', 'desc')->paginate(5);
    return view('blog')->with('profil', $data)->with('list', $blog);
  }

  public function blogdetail($id) {
    $data = session::get('profil');
    $detail = db::select("call detailblog($id)");
    return view('article')->with('profil', $data)->with('blog', $detail);
  }

  public function event($id) {
    $data = session::get('profil');
    $query = substr($id, 0, 5);
    $list = DB::table('vendor')->where('jenis', 'LIKE', '%' . $query . '%')->where('status', 'Verified')->paginate(12);
    //  $count = DB::table('news')->where('judul', 'LIKE', '%' . $query . '%')->orWhere('kategori','LIKE','%' . $query . '%')->count();
    return view('vendor')->with('profil', $data)->with('list', $list);
  }

  public function inspiration() {
    $data = session::get('profil');
    $inspirasi = DB::table('inspirasi')->orderBy('id', 'desc')->paginate(12);
    return view('inspiration')->with('profil', $data)->with('inspirasi', $inspirasi);
  }

  public function joinReason() {
    return view('join-reason');
  }

  public function askVendor(Request $request) {
    $user = session::get('profil');

    if ($user) {
      $currentTime = Carbon::now();
      $senderId = $request->senderUser;
      $receiverId = $request->receiverUser;
      $roomId =
      $initialMessage = "Halo.. saya mau bertanya";

      $existingRoom = $this->checkAvailableRoom($senderId, $receiverId);

      if($existingRoom){
        $roomId = $existingRoom;
      }else {
        $roomId = $senderId . "-" . $currentTime->format("yymdhms");

        $messageRoom = new MessageRoom;
        $messageRoom->id = $roomId;
        $messageRoom->user_id = $senderId;
        $messageRoom->save();

        $messageRoom = new MessageRoom;
        $messageRoom->id = $roomId;
        $messageRoom->user_id = $receiverId;
        $messageRoom->save();

        $message = new Message;
        $message->room_id = $roomId;
        $message->sender_id = $senderId;
        $message->message = $initialMessage;
        $message->save();
      }

      return redirect('/account/messages');
    }

    return redirect('/');
  }

  private function checkAvailableRoom($senderId, $receiverId) {
    $checkQuery = "select mr.id from message_room mr where mr.id in (select id from message_room mr where user_id = " . $senderId . ") and mr.user_id != " . $senderId . " and mr.user_id = " . $receiverId;

    return db::select($checkQuery);
  }
}
