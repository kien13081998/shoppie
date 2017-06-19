<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  public function Categories()
  {
      return $this->belongsTo('shoppie\Categories');
  }
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
      'categories_id'
  ];


}
