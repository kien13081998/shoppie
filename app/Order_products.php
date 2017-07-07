<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Order_products extends Model
{
  protected $table ='orders_products';

  public function Orders()
   {
       return $this->belongsTo('App\Orders');
   }
   public function Products()
   {
       return $this->hasOne('App\Products',);
   }
}
