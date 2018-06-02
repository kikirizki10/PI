<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblECommerce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_e-commerce', function($table){
        $table->string('id_e-commerce',8)->primary();
        $table->string('link_e-commerce');
        $table->string('id_product',8);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_e-commerce');
    }
}
