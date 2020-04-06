<?php

namespace App\Http\Controllers\Client;

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

  public function vendor($id, Request $request) {
    $sortBy = $this->validateSortBy($request->get('sortBy'));
    $sortType = $this->validateSortType($request->get('sort'));

    $data = session::get('profil');
    $query = substr($id, 0, 5);
    $list = '';

    if ($sortBy && $sortType) {
      $list = DB::table('vendor')->where('kategori', 'LIKE', '%' . $query . '%')->where('status', 'Verified')->orderBy($sortBy, $sortType)->paginate(12);
    } else {
      $list = DB::table('vendor')->where('kategori', 'LIKE', '%' . $query . '%')->where('status', 'Verified')->paginate(12);
    }

    //  $count = DB::table('news')->where('judul', 'LIKE', '%' . $query . '%')->orWhere('kategori','LIKE','%' . $query . '%')->count();
    return view('vendor')->with('profil', $data)->with('list', $list)->with('jenis', $id)->with('tipe', '');
  }

  public function event($id) {
    $data = session::get('profil');
    $query = substr($id, 0, 5);
    $list = DB::table('vendor')->where('jenis', 'LIKE', '%' . $query . '%')->where('status', 'Verified')->paginate(12);
    //  $count = DB::table('news')->where('judul', 'LIKE', '%' . $query . '%')->orWhere('kategori','LIKE','%' . $query . '%')->count();
    return view('vendor')->with('profil', $data)->with('list', $list);
  }

  public function vendorevent($id, $jenis) {
    $data = session::get('profil');
    if ($id == '') {
      $query = 'all';
    } else {
      $query = substr($id, 0, 5);
    }
    $jenisi = substr($jenis, 0, 4);
    $list = DB::table('vendor')->where('kategori', 'LIKE', '%' . $query . '%')
      ->Where('jenis', 'LIKE', '%' . $jenisi . '%')->where('status', 'Verified')->paginate(12);
    //  $count = DB::table('news')->where('judul', 'LIKE', '%' . $query . '%')->orWhere('kategori','LIKE','%' . $query . '%')->count();
    return view('vendor')->with('profil', $data)->with('list', $list)->with('jenis', $id)->with('tipe', $jenis);
  }

  public function searchvendor(Request $request) {
    $data = session::get('profil');
    $query = $request->get('query');
    //$jenisi=substr($jenis,0,4);
    $list = DB::table('vendor')->where('kategori', 'LIKE', '%' . $query . '%')->where('status', 'Verified')
      ->orWhere('jenis', 'LIKE', '%' . $query . '%')->orWhere('nama', 'LIKE', '%' . $query . '%')->paginate(12);
    $count = $list->count();
    return view('searchvendor')->with('profil', $data)->with('list', $list)->with('query', $query)->with('count', $count);
  }

  public function vendordetail($id) {
    $data = session::get('profil');
    $detail = db::select("call detailvendor($id)");
    $status = $detail[0]->status;

    if ($status == 'Verified') {
      return view('detail-vendors')->with('list', $detail)->with('profil', $data);
    } else {
      return redirect('/');
    }
  }

  public function inspiration() {
    $data = session::get('profil');
    $inspirasi = DB::table('inspirasi')->orderBy('id', 'desc')->paginate(12);
    return view('inspiration')->with('profil', $data)->with('inspirasi', $inspirasi);
  }

  public function joinReason() {
    return view('join-reason');
  }

  private function validateSortBy($sortBy) {
    switch ($sortBy) {
      case "harga":
      case "rating":
        return $sortBy;
      default:
        return null;
    }
  }

  private function validateSortType($sortType) {
    switch ($sortType) {
      case "asc":
      case "desc":
        return $sortType;
      default:
        return null;
    }
  }
}
