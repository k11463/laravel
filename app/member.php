<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
  protected $table = 'member';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'account', 'password', 'e-mail', 'phone'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];

  public function author(){
    return $this->hasMany('App\User', 'id', 'm_id');
  }
}
