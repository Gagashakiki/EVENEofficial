<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorRatings extends Model {
  protected $table = 'vendor_ratings';

  public function user() {
    return $this->belongsTo('App\Users');
  }
}
