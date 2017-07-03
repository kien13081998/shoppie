<?php

namespace shoppie;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Users extends Authenticatable
{
  use Notifiable;
  protected $table ='users';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'last_name',
      'first_name',
      'email',
      'phone',
      'images',
      'street',
      'city',
      'password'
  ];
  protected $hidden = [
      'password', 'remember_token',
  ];
}
