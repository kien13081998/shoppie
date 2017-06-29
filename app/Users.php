<?php

namespace shoppie;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Users extends Model
{
  use Notifiable;

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
