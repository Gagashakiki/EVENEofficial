<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorRatings extends Model {
  protected $table = 'vendor_ratings';

  const UPDATED_AT = null;

  protected $fillable = ['vendor_id', 'userId', 'title', 'review', 'rating'];
  protected $guarded = array('id', 'created_at', 'updated_at');

  public function user() {
    return $this->belongsTo('App\Users');
  }
}
