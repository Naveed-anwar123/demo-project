<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','facebook_id','referral_by','affiliate_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




  public function posts(){
   return $this->hasMany('App\Post');
  }


    public function roles(){
        return $this->belongsToMany('App\Role','roles_users','user_id','roles_id')->withTimestamps();;
    }
}
