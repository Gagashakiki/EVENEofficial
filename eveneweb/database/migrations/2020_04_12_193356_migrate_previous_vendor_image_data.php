<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigratePreviousVendorImageData extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    DB::statement('INSERT INTO vendor_images (vendor_id, image_number, image_name, image_location, created_at, updated_at) SELECT v.id, 1, v.gambar1, CONCAT(\'img/vendor/\',v.id,\'/\',v.gambar1), NOW(), NOW() FROM vendor v WHERE v.gambar1 IS NOT NULL AND v.gambar1 != \'\'');
    DB::statement('INSERT INTO vendor_images (vendor_id, image_number, image_name, image_location, created_at, updated_at) SELECT v.id, 2, v.gambar2, CONCAT(\'img/vendor/\',v.id,\'/\',v.gambar2), NOW(), NOW() FROM vendor v WHERE v.gambar2 IS NOT NULL AND v.gambar2 != \'\'');
    DB::statement('INSERT INTO vendor_images (vendor_id, image_number, image_name, image_location, created_at, updated_at) SELECT v.id, 3, v.gambar3, CONCAT(\'img/vendor/\',v.id,\'/\',v.gambar3), NOW(), NOW() FROM vendor v WHERE v.gambar3 IS NOT NULL AND v.gambar3 != \'\'');
    DB::statement('INSERT INTO vendor_images (vendor_id, image_number, image_name, image_location, created_at, updated_at) SELECT v.id, 4, v.gambar4, CONCAT(\'img/vendor/\',v.id,\'/\',v.gambar4), NOW(), NOW() FROM vendor v WHERE v.gambar4 IS NOT NULL AND v.gambar4 != \'\'');
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    DB::statement('DELETE FROM vendor_images');
  }
}
