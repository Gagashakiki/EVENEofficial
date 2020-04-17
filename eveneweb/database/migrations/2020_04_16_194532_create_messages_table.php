<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('messages', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('room_id', 20);
      $table->integer('sender_id');
      $table->string('message', 255);
      $table->timestamps();

      $table->foreign('room_id')->references('id')->on('message_room');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('messages');
  }
}
