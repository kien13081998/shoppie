<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $fillable = [
      'name',
      'detail',
      'images',
      'intro_short',
      'brand',
      'sale',
      'price',
      'categories_id'
  ];
  public function Categories()
  {
    return $this->belongsTo('shoppie\Categories');
  }
  public function Order_products()
  {
      return $this->hasMany('shoppie\Order_products');
  }

}
