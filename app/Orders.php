<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
  protected $fillable = [
      'user_id'
  ];
  public function Users()
  {
      return $this->belongsTo('shoppie\Users');
  }
  public function Order_products()
  {
      return $this->hasMany('shoppie\Order_products');
  }
}
