<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Order_products extends Model
{
  protected $table ='orders_products';
  protected $fillable = [
    'order_id',
    'product_id',
    'qty'
  ];
  public function Orders()
   {
       return $this->belongsTo('App\Orders');
   }
   public function Products()
   {
       return $this->belongsTo('App\Products');
   }
}
