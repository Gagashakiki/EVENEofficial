<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Quotation;
use App\User;
use Auth;
use Crypt;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
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

  //Vendor
  public function myvendors(Request $request) {
    $users = Session::get('profil');
    if ($users) {
      if ($users[0]->jenis != 'vendor') {
        abort(404);
      }
      //  dd($users);
      $iduser = $users[0]->id;
      $vendor = db::select("call daftaruvendor($iduser)");
      return view('my-vendors')->with('profil', $users)->with('vendor', $vendor);
    } else {
      return redirect('/');
    }
  }

  public function editvendor($id) {
    $user = session::get('profil');
    $detail = db::select("call editvendor($id)");
    $iduser = $user[0]->id;
    $idvendoruser = $detail[0]->iduser;
    if ($iduser == $idvendoruser) {
      return view('editvendor')->with('profil', $user)->with('detail', $detail);
    } else {
      return redirect('/myvendors');
    }
  }

  public function insertvendor() {
    $user = session::get('profil');
    if ($user) {
      return view('insertvendor')->with('profil', $user);
    } else {
      return redirect('/')->with('failed', 'Please Login before you add your vendor');
    }
  }

  public function submitvendor(Request $request) {
    $user = session::get('profil');
    $iduser = $user[0]->id;
    $emailuser = $user[0]->email;
    if ($request->gambar2) {
      //  $destinationPath="public/img/avatar";
      $file = $request->file('gambar2');
      $extension2 = $file->getClientOriginalName();
      $path = public_path() . '/img/vendor';
      $uplaod = $file->move($path, $extension2);
      $gambar2 = $extension2;
    } else {
      $gambar2 = NULL;
    }
    if ($request->gambar3) {
      //  $destinationPath="public/img/avatar";
      $file = $request->file('gambar3');
      $extension3 = $file->getClientOriginalName();
      $path = public_path() . '/img/vendor';
      $uplaod = $file->move($path, $extension3);
      $gambar3 = $extension3;
    } else {
      $gambar3 = NULL;
    }
    if ($request->gambar4) {
      //  $destinationPath="public/img/avatar";
      $file = $request->file('gambar4');
      $extension4 = $file->getClientOriginalName();
      $path = public_path() . '/img/vendor';
      $uplaod = $file->move($path, $extension4);
      $gambar4 = $extension4;
    } else {
      $gambar4 = NULL;
    }


    $number = mt_rand(1000, 8000);
    $cek = db::select("call idcekvendor($number)");
    if ($cek) {
      $number = mt_rand(1000, 8000);
      $cek = db::select("call idcekvendor($number)");
      if ($cek) {
        $number = mt_rand(1000, 8000);
      }
    }
    $two = implode(',', $_POST['kategori']);
    $file = $request->file('gambar1');
    $extension = $file->getClientOriginalName();
    $path = public_path() . '/img/vendor';
    $detail = addslashes($request->detail);
    $uplaod = $file->move($path, $extension);
    $insert = db::unprepared("call insertvendor('$iduser','$request->jenis','$request->harga',
            '$request->email','$request->notelp','$request->alamat','$detail',
            '$extension','$gambar2','$gambar3','$gambar4','all, $two','$request->nama','$number','$request->judul')");
    $dataemail = db::select("call editvendor('$number')");
    session::put('datavem', $dataemail);
    Mail::to($emailuser)->send(new Konfirmasi($user));
    return redirect('/myvendors')->with('success', 'Please Ignore The Email We Just Sent, it\'s free for now!');
  }

  public function editvendorsubmit(Request $request) {
    if ($request->gambar1n) {
      //  $destinationPath="public/img/avatar";
      $file = $request->file('gambar1n');
      $extension = $file->getClientOriginalName();
      $path = public_path() . '/img/vendor';
      $uplaod = $file->move($path, $extension);
      $gambar1 = $extension;
    } else {
      $gambar1 = $request->gambar1;
    }
    if ($request->gambar2n) {
      //  $destinationPath="public/img/avatar";
      $file = $request->file('gambar2n');
      $extension2 = $file->getClientOriginalName();
      $path = public_path() . '/img/vendor';
      $uplaod = $file->move($path, $extension2);
      $gambar2 = $extension2;
    } else {
      $gambar2 = $request->gambar2;
    }
    if ($request->gambar3n) {
      //  $destinationPath="public/img/avatar";
      $file = $request->file('gambar3n');
      $extension3 = $file->getClientOriginalName();
      $path = public_path() . '/img/vendor';
      $uplaod = $file->move($path, $extension3);
      $gambar3 = $extension3;
    } else {
      $gambar3 = $request->gambar3;
    }
    if ($request->gambar4n) {
      //  $destinationPath="public/img/avatar";
      $file = $request->file('gambar4n');
      $extension4 = $file->getClientOriginalName();
      $path = public_path() . '/img/vendor';
      $uplaod = $file->move($path, $extension4);
      $gambar4 = $extension4;
    } else {
      $gambar4 = $request->gambar4;
    }

    $detail = addslashes($request->detail);
    $update = db::unprepared("call editvendorx('$request->harga',
      '$request->email','$request->notelp','$request->alamat','$detail',
      '$gambar1','$gambar2','$gambar3','$gambar4','$request->nama','$request->judul','$request->idv')");
    return redirect('/myvendors')->with('success', 'Updated!');
  }

  public function deletevendor($id) {

    if (session::get('profiladmin')) {
      $delete = db::unprepared("call deletevendor($id)");
      return response()->json([
        'success' => 'Record has been deleted!'
      ]);
    } elseif (session::get('profil')) {
      $user = session::get('profil');
      $iduser = $user[0]->id;
      if ($iduser == $id) {
        $delete = db::unprepared("call deletevendor($id)");
        return response()->json([
          'success' => 'Record has been deleted!'
        ]);
      } else {
        return redirect('/');
      }
    }
  }

  private function createUserCustomer($request) {
    $password = hash::make($request->pass);
    $user = User::create([
      'email' => $request->email,
      'pass' => $password,
    ]);

    Mail::to($request->email)->send(new VerifyEmail($user));

    return redirect('/')->with('success', 'Please Verify Your Email before Using Evene');
  }

  private function createUserVendor($request) {
    $password = hash::make($request->pass);
    $email = $request->email;
    $fullName = $request->fullName;
    $companyName = $request->companyName;
    $phoneNumber = $request->phoneNumber;

    $user = User::create([
      'email' => $email,
      'pass' => $password,
      'nama1' => $fullName,
      'nama2' => $companyName,
      'notelp' => $phoneNumber,
      'jenis' => 'vendor'
    ]);

    Mail::to($email)->send(new VerifyEmail($user));

    return redirect('/')->with('success', 'Please Verify Your Email before Using Evene');
  }
}
