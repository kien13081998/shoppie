<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
  protected $table ='orders';
  public function Users()
  {
      return $this->belongsTo('shoppie\Users');
  }
  public function Order_detail()
  {
      return $this->hasMany('shoppie\Order_product');
  }

}
