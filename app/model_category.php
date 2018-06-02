<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_category extends Model
{
  protected $table = 'tbl_category';
  protected $fillable = ['id_category', 'nama_category', 'url_gambar'];
  public $incrementing = false;
  public $timestamps = false;
}
