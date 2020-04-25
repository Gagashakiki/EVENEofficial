<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
  protected $table = 'order';

  public function customer() {
    return $this->belongsTo('App\Users', 'customer_id');
  }
}
