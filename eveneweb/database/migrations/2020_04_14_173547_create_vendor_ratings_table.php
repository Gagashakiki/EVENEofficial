<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorRatingsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('vendor_ratings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedInteger('vendor_id');
      $table->integer("user_id");
      $table->string('title', 50);
      $table->string('review', 100);
      $table->tinyInteger('rating');
      $table->timestamp('created_at');

      $table->foreign('vendor_id')->references('id')->on('vendor');
      $table->foreign('user_id')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('vendor_ratings');
  }
}
