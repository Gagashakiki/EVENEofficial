<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVendorImagesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    DB::statement('ALTER TABLE vendor MODIFY id INT UNSIGNED');
    DB::statement('ALTER TABLE vendor MODIFY gambar1 LONGTEXT NULL');

    Schema::create('vendor_images', function (Blueprint $table) {
      $table->unsignedInteger('vendor_id');
      $table->tinyInteger('image_number');
      $table->string('image_name', 100);
      $table->string('image_location', 255);
      $table->timestamps();

      $table->primary(['vendor_id', 'image_number']);
      $table->foreign('vendor_id')->references('id')->on('vendor');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('vendor_images');
    DB::statement('ALTER TABLE vendor MODIFY id VARCHAR(50)');
  }
}
