<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Quotation;
use DB;
use Session;
use str;


class ClientController extends Controller {
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

  public function aboutUs() {
    return view('about-us');
  }
}
