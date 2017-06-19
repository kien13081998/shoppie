<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable = [
      'id',
      'name',
      'status',
  ];
  public function products()
  {
      return $this->hasMany('shoppie\Products');
  }
}
