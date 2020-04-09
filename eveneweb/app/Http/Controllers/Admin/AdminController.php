<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Quotation;
use Auth;
use Crypt;
use DB;
use Illuminate\Http\Request;
use Mail;
use Session;

class AdminController extends controller {
  public function dashboard(Request $request) {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $usercount = db::select("call totaluser()");
      $ordercount = db::select("call ordervendor()");
      $count = db::select("call viewcounter()");
      return view('admin.dashboard')->with('profil', $data)->with('ucount', $usercount)
        ->with('ocount', $ordercount)->with('counter', $count);
    }
    return redirect('admin/login');
  }

  public function order(Request $request) {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $dataorder = db::select("call dataorder()");
      return view('admin.vendor')->with('profil', $data)->with('order', $dataorder);
    }
    return redirect('admin/login');
  }

  public function approve($id) {
    $delete = db::unprepared("call approvevendor($id)");
    return response()->json([
      'success' => 'Vendor Approved!'
    ]);
  }

  public function reject($id) {
    $delete = db::unprepared("call deletevendor($id)");
    return response()->json([
      'success' => 'Vendor Rejected!'
    ]);
  }

  public function formblog() {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      //  $dataorder=db::select("call dataorder()");
      return view('admin.form-blog')->with('profil', $data);
    }
    return redirect('admin/login');
  }

  public function blog() {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $datablog = db::select("call listblog()");
      return view('admin.blog')->with('profil', $data)->with('blog', $datablog);
    }
    return redirect('admin/login');
  }

  public function insert(Request $request) {
    $file = $request->file('thumbnail');
    $extension = $file->getClientOriginalName();
    $path = public_path() . '/img/blog';
    $uplaod = $file->move($path, $extension);
    $insert = db::unprepared("call insertblog('$request->judul','$extension','$request->isi','$request->penulis')");
    return redirect('admin/blog')->with('success', 'Article Posted!');
  }

  public function edit($id) {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $datablog = db::select("call detailblog($id)");
      return view('admin.editblog')->with('profil', $data)->with('blog', $datablog);
    }
    return redirect('admin/login');
  }

  public function editsubmit(Request $request) {
    if ($request->thumbnailnew) {
      $file = $request->file('thumbnail');
      $extension = $file->getClientOriginalName();
      $path = public_path() . '/img/blog';
      $uplaod = $file->move($path, $extension);
    } else {
      $extension = $request->thumbnail;
    }
    $insert = db::unprepared("call editblog('$request->judul','$extension','$request->isi',$request->idb)");
    return redirect()->back()->with('success', 'Article Posted!');
  }


  public function deleteblog($id) {
    if (session::get('profiladmin')) {
      $delete = db::unprepared("call deleteblog($id)");
      return response()->json([
        'success' => 'Record has been deleted!'
      ]);
    } else {
      return redirect('/');
    }
  }

  public function inspiration() {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $datains = db::select("call tampilaninspirasi()");
      return view('admin.inspiration')->with('profil', $data)->with('inspirasi', $datains);
    }
    return redirect('admin/login');
  }

  public function deleteinsp($id) {
    if (session::get('profiladmin')) {
      $delete = db::unprepared("call deleteinsp($id)");
      return response()->json([
        'success' => 'Record has been deleted!'
      ]);
    } else {
      return redirect('/');
    }
  }

  public function forminsp() {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      return view('admin.form-inspiration')->with('profil', $data);
    }
    return redirect('admin/login');
  }

  public function insertinsp(Request $request) {
    $file = $request->file('image');
    $extension = $file->getClientOriginalName();
    $path = public_path() . '/img/inspiration';
    $uplaod = $file->move($path, $extension);
    $insert = db::unprepared("call insertinsp('$extension','$request->event','$request->vendor')");
    return redirect('admin/inspiration')->with('success', 'Blog Updated!');
  }


  public function editinsp($id) {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $datainsp = db::select("call detailinspirasi($id)");
      return view('admin.edit-inspiration')->with('profil', $data)->with('insp', $datainsp);
    }
    return redirect('admin/login');
  }

  public function editinsps(Request $request) {
    if ($request->imagen) {
      $file = $request->file('imagen');
      $extension = $file->getClientOriginalName();
      $path = public_path() . '/img/inspiration';
      $uplaod = $file->move($path, $extension);
    } else {
      $extension = $request->image;
    }
    $insert = db::unprepared("call editinsp('$extension','$request->event','$request->vendor',$request->idb)");
    return redirect()->back()->with('success', 'Inspiration Updated!');
  }

  public function listUserCustomer() {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $userCustomers = db::table('users')->where('jenis', '=', 'users')->get();
      return view('admin.users')->with('profil', $data)->with('users', $userCustomers)
        ->with('firstName', 'First Name')->with('secondName', 'Last Name');
    }
    return redirect('admin/login');
  }

  public function listUserVendor() {
    if (session::get('profiladmin')) {
      $data = session::get('profiladmin');
      $userVendors = db::table('users')->where('jenis', '=', 'vendor')->get();
      return view('admin.users')->with('profil', $data)->with('users', $userVendors)
        ->with('firstName', 'Full Name')->with('secondName', 'Company Name');
    }
    return redirect('admin/login');
  }

  public function deleteuser($id) {
    if (session::get('profiladmin')) {
      $delete = db::unprepared("call deleteuser($id)");
      return response()->json([
        'success' => 'Record has been deleted!'
      ]);
    } else {
      return redirect('/');
    }
  }
}
