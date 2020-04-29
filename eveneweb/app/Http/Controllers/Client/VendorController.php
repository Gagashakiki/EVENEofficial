<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\CreateVendor;
use App\VendorRatings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller {
  public function listVendorsByCategory($category, Request $request) {
    $sortBy = $this->validateSortBy($request->get('sortBy'));
    $sortType = $this->validateSortType($request->get('sort'));

    $data = session::get('profil');
    $query = substr($category, 0, 5);
    $list = '';

    if ($sortBy && $sortType) {
      $list = DB::table('vendor')
        ->select(DB::raw("vendor.id, vendor.nama, vendor.jenis, vendor.kategori, vendor.gambar1, COALESCE(CAST(AVG(vendor_ratings.rating) AS DECIMAL(10,1)), 0) AS ratingCount, count(vendor_ratings.id) AS reviewCount"))
        ->leftJoin('vendor_ratings', 'vendor.id', '=', 'vendor_ratings.vendor_id')
        ->where('kategori', 'LIKE', '%' . $query . '%')->where('status', 'Verified')
        ->groupBy('vendor.id')
        ->orderBy($sortBy, $sortType)
        ->paginate(12);
    } else {
      $list = DB::table('vendor')
        ->select(DB::raw("vendor.id, vendor.nama, vendor.jenis, vendor.kategori, vendor.gambar1, COALESCE(CAST(AVG(vendor_ratings.rating) AS DECIMAL(10,1)), 0) AS ratingCount, count(vendor_ratings.id) AS reviewCount"))
        ->leftJoin('vendor_ratings', 'vendor.id', '=', 'vendor_ratings.vendor_id')
        ->where('kategori', 'LIKE', '%' . $query . '%')->where('status', 'Verified')
        ->groupBy('vendor.id')
        ->paginate(12);
    }

    return view('vendor')->with('profil', $data)->with('list', $list)->with('jenis', $category)->with('tipe', '');
  }

  public function vendorDetail($id) {
    $data = session::get('profil');
    $detail = db::select("call detailvendor($id)");
    $status = $detail[0]->status;

    $reviews = VendorRatings::with('user')->where('vendor_id', '=', $id)->get();

    if ($status == 'Verified') {
      return view('vendor-detail')->with('list', $detail)->with('reviews', $reviews)->with('profil', $data[0]);
    } else {
      return redirect('/');
    }
  }

  public function listVendorsByCategoryAndEvent($category, $event, Request $request) {
    $data = session::get('profil');

    $sortBy = $this->validateSortBy($request->get('sortBy'));
    $sortType = $this->validateSortType($request->get('sort'));

    $list = '';

    if ($category == '') {
      $query = 'all';
    } else {
      $query = substr($category, 0, 5);
    }
    $jenisi = substr($event, 0, 4);

    if ($sortBy && $sortType) {
      $list = DB::table('vendor')
        ->select(DB::raw("vendor.id, vendor.nama, vendor.jenis, vendor.kategori, vendor.gambar1, COALESCE(CAST(AVG(vendor_ratings.rating) AS DECIMAL(10,1)), 0) AS ratingCount, count(vendor_ratings.id) AS reviewCount"))
        ->leftJoin('vendor_ratings', 'vendor.id', '=', 'vendor_ratings.vendor_id')
        ->where('kategori', 'LIKE', '%' . $query . '%')->Where('jenis', 'LIKE', '%' . $jenisi . '%')->where('status', 'Verified')
        ->groupBy('vendor.id')
        ->orderBy($sortBy, $sortType)
        ->paginate(12);
    } else {
      $list = DB::table('vendor')
        ->select(DB::raw("vendor.id, vendor.nama, vendor.jenis, vendor.kategori, vendor.gambar1, COALESCE(CAST(AVG(vendor_ratings.rating) AS DECIMAL(10,1)), 0) AS ratingCount, count(vendor_ratings.id) AS reviewCount"))
        ->leftJoin('vendor_ratings', 'vendor.id', '=', 'vendor_ratings.vendor_id')
        ->where('kategori', 'LIKE', '%' . $query . '%')->Where('jenis', 'LIKE', '%' . $jenisi . '%')->where('status', 'Verified')
        ->groupBy('vendor.id')
        ->paginate(12);
    }

    return view('vendor')->with('profil', $data)->with('list', $list)->with('jenis', $category)->with('tipe', $event);
  }

  public function searchVendors(Request $request) {
    $data = session::get('profil');
    $query = $request->get('query');

    $list = DB::table('vendor')
      ->select(DB::raw("vendor.id, vendor.nama, vendor.jenis, vendor.kategori, vendor.gambar1, COALESCE(CAST(AVG(vendor_ratings.rating) AS DECIMAL(10,1)), 0) AS ratingCount, count(vendor_ratings.id) AS reviewCount"))
      ->leftJoin('vendor_ratings', 'vendor.id', '=', 'vendor_ratings.vendor_id')
      ->where('kategori', 'LIKE', '%' . $query . '%')->where('status', 'Verified')
      ->orWhere('jenis', 'LIKE', '%' . $query . '%')->orWhere('nama', 'LIKE', '%' . $query . '%')
      ->groupBy('vendor.id')
      ->paginate(12);

    $count = $list->count();

    return view('searchvendor')->with('profil', $data)->with('list', $list)->with('query', $query)->with('count', $count);
  }

  public function listUserVendors(Request $request) {
    $users = Session::get('profil');
    if ($users) {
      if ($users[0]->jenis != 'vendor') {
        abort(404);
      }

      $iduser = $users[0]->id;
      $vendor = db::select("call daftaruvendor($iduser)");
      return view('account-vendors')->with('profil', $users)->with('vendor', $vendor);
    } else {
      return redirect('/');
    }
  }

  public function createVendor() {
    $user = session::get('profil');
    if ($user) {
      if ($user[0]->jenis != 'vendor') {
        abort(404);
      }

      return view('account-vendors-create')->with('profil', $user);
    } else {
      return redirect('/')->with('failed', 'Please Login before you add your vendor');
    }
  }

  public function createVendorSubmit(Request $request) {
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

    Mail::to($emailuser)->send(new CreateVendor($dataemail));

    return redirect('/account/vendors')->with('success', 'Please Ignore The Email We Just Sent, it\'s free for now!');
  }

  public function editVendor($id) {
    $user = session::get('profil');
    if ($user) {
      if ($user[0]->jenis != 'vendor') {
        abort(404);
      }

      $detail = db::select("call editvendor($id)");
      $iduser = $user[0]->id;
      $idvendoruser = $detail[0]->iduser;
      if ($iduser == $idvendoruser) {
        return view('account-vendors-edit')->with('profil', $user)->with('detail', $detail);
      } else {
        return redirect('/account/vendors');
      }
    }

    return redirect('/');
  }

  public function editVendorSubmit(Request $request) {
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

    return redirect('/account/vendors')->with('success', 'Updated!');
  }

  public function deleteVendorSubmit($id) {
    if (session::get('profiladmin')) {
      $delete = db::unprepared("call deletevendor($id)");
      return response()->json([
        'success' => 'Record has been deleted!'
      ]);
    } elseif (session::get('profil')) {
      $user = session::get('profil');
      $jenisUser = $user[0]->jenis;

      if ($jenisUser == 'vendor') {
        $delete = db::unprepared("call deletevendor($id)");
        return response()->json([
          'success' => 'Record has been deleted!'
        ]);
      } else {
        return redirect('/');
      }
    }
  }

  public function vendorReviewSubmit(Request $request) {
    $user = session::get('profil');

    if ($user) {
      $vendorRating = new VendorRatings();

      $vendorRating->vendor_id = $request->vendorId;
      $vendorRating->user_id = $request->userId;
      $vendorRating->title = $request->titleReview;
      $vendorRating->review = $request->review;
      $vendorRating->rating = $request->rating;

      $vendorRating->save();

      return redirect('/vendor/detail/'.$request->vendorId);
    }

    return redirect('/');
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
