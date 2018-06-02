<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_product extends Model
{
  protected $table = 'tbl_product';
  protected $fillable = ['id_product', 'nama_product', 'jenis', 'harga', 'deskripsi', 'url_gambar', 'id_category'];
  public $incrementing = false;
  public $timestamps = false;
}
