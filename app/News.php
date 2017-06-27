<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;



class News extends Model
{
  protected $fillable = [
      'id',
      'name',
      'detail',
      'intro_short',
      'images'
  ];
}
