<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {
  protected $table = 'users';

  public function vendorRatings() {
    return $this->hasMany('App\VendorRatings');
  }

  public function customerOrder() {
    return $this->hasMany('App\Order', 'customer_id');
  }
}
