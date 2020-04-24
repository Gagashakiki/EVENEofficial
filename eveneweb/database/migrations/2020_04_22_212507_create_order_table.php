<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('order', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('vendor_id');
      $table->integer('customer_id');
      $table->string('event_type');
      $table->string('event_theme');
      $table->date('event_date');
      $table->string('notes');
      $table->integer('transaction_amount');
      $table->string('transaction_status');
      $table->timestamps();

      $table->foreign('vendor_id')->references('id')->on('users');
      $table->foreign('customer_id')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('order');
  }
}
