<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Mail\VerifyEmail;
use App\Quotation;
use App\User;
use Auth;
use Crypt;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;


class UserController extends Controller {
  public function daftar(Request $request) {
    if ($request->userType == 'vendor') {
      return $this->createUserVendor($request);
    }

    return $this->createUserCustomer($request);
  }

  public function verify() {
    if (empty(request('token'))) {
      // if token is not provided
      return redirect('/');
    }
    // decrypt token as email
    $decryptedEmail = Crypt::decrypt(request('token'));
    //dd($decryptedEmail);
    // find user by email
    $user = DB::SELECT("CALL userstatus('$decryptedEmail')");
    //$user = User::whereEmail($decryptedEmail)->first();
    //dd($user);
    $user = $user[0];
    //dd($user);
    if ($user->status == 'activated') {
      // user is already active, do something
      return redirect('/')->with('failed', 'Email sudah diaktifkan');
    }
    // otherwise change user status to "activated"
    $update = db::unprepared("call statusverifying('$decryptedEmail')");
    // $user->status = 'activated';
    // $user->save();
    // autologin
    // Auth::loginUsingId($user->id);
    return redirect('/')->with('terverifikasi', 'Verifikasi Berhasil! Silahkan Login!');
  }

  public function login(Request $request) {
    $email = $request->email;
    $pass = $request->pass;
    $users = db::select("call datauser('$email')");
    if ($users == null) {

      return redirect()->back()->with('failed', 'Username/Password salah atau tidak terdaftar');

    } elseif ($users[0]->status == 'pending') {
      return redirect()->back()->with('failed', 'Email Belum diverifikasi');

    } else {
      $data = User::where('email', $email)->first();
      if ($data) { //apakah email tersebut ada atau tidak
        if (Hash::check($pass, $data->pass)) {
          $users = db::select("call datauser('$request->email')");
          session::put('profil', $users);
          return redirect('/');
        } else {
          return redirect()->back()->with('failed', 'Username/Password salah atau tidak terdaftar');
        }
      }
    }
  }

  public function logout() {
    if (session::get('profil')) {
      session::forget('profil');
      return redirect('/');
    } else {
      return redirect('/');
    }
  }

  public function profile() {
    $user = session::get('profil');
    if ($user) {
      return view('profile')->with('profil', $user);
    }

    return redirect('/');
  }

  public function editprofile(Request $request) {
    $pass = $request->pass;
    $data = User::where('email', $request->email)->first();
    //apakah email tersebut ada atau tidak
    if (Hash::check($pass, $data->pass)) {
      if ($request->pictnew) {
        //  $destinationPath="public/img/avatar";
        $file = $request->file('pictnew');
        $extension = $file->getClientOriginalName();
        $path = public_path() . '/img/avatar';
        $uplaod = $file->move($path, $extension);
      } else {
        $extension = $request->pict;
      }
      if ($request->passnew) {
        $pass = Hash::make($request->passnew);
      } else {
        $pass = Hash::make($pass);
      }
      $edit = db::unprepared("call editprofil('$request->nama1','$request->nama2','$extension','$request->notelp','$pass','$request->idu')");
      Session::forget('profil');
      $users = db::select("call datauser('$request->email')");
      $profil = session::put('profil', $users);
      return redirect('/profile')->with('terverifikasi', 'Profil Berhasil diubah');
    }
    return redirect('/profile')->with('failed', 'Password salah');
  }

  public function listMessages() {
    $user = session::get('profil');
    if ($user) {
      $queryContactMessage = "select u.id, ml.room_id as roomId, ml.created_at as createdAt, case when u.jenis = 'vendor' then u.nama2 else concat(u.nama1, ' ', u.nama2) end as username, u.pict as avatar ,ml.message, u.email from message_room mr join (select m.* from messages m 
join (select max(m.created_at) created_at, m.room_id from messages m group by m.room_id) ml on m.room_id = ml.room_id and m.created_at = ml.created_at) ml on mr.id = ml.room_id
join users u on mr.user_id = u.id
where mr.id in (select mr.id from message_room mr where mr.user_id = " . $user[0]->id . ") and mr.user_id != " . $user[0]->id. " order by ml.created_at desc";

      $contacts = db::select($queryContactMessage);

      return view('account-messages')->with('profil', $user)->with('contacts', json_encode($contacts, JSON_NUMERIC_CHECK));
    }

    return redirect('/');
  }

  private function createUserCustomer($request) {
    $password = hash::make($request->pass);
    $email = $request->email;

    $user = User::create([
      'email' => $email,
      'pass' => $password,
      'nama1' => $request->firstName,
      'nama2' => $request->lastName,
      'notelp' => $request->phoneNumber,
      'jenis' => 'users'
    ]);

    $username = $request->firstName . " " . $request->lastName;

    Mail::to($email)->send(new EmailVerification($user, $username));

    return redirect('/')->with('success', 'Please Verify Your Email before Using Evene');
//    return $user;
  }

  private function createUserVendor($request) {
    $password = hash::make($request->pass);
    $email = $request->email;

    $user = User::create([
      'email' => $email,
      'pass' => $password,
      'nama1' => $request->fullName,
      'nama2' => $request->companyName,
      'notelp' => $request->phoneNumber,
      'jenis' => 'vendor'
    ]);

    Mail::to($email)->send(new EmailVerification($user, $request->fullName));

    return redirect('/')->with('success', 'Please Verify Your Email before Using Evene');
  }
}
