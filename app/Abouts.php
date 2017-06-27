<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
  protected $fillable = [
      'id',
      'name',
      'detail',
  ];
}
