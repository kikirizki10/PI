<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_e-commerce extends Model
{
  protected $table = 'tbl_e-commerce';
  protected $fillable = ['id_e-commerce', 'link_e-commerce', 'id_product'];
  public $incrementing = false;
  public $timestamps = false;
}
