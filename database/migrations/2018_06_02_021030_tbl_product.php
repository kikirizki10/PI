<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_product', function($table){
        $table->string('id_product',8)->primary();
        $table->string('nama_product', 50);
        $table->string('jenis', 50);
        $table->double('harga', 8);
        $table->text('deskripsi');
        $table->string('url_gambar');
        $table->string('id_category',8);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_product');
    }
}
