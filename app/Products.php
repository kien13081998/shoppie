<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $fillable = [
      'name',
      'detail',
      'size',
      'images',
      'color',
      'quantity',
      'parent',
      'sale',
      'price',

  ];
}
