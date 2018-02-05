<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    protected $fillable = ['responsibility'];


    public function users(){
        return $this->belongsToMany('App\User','roles_users','roles_id','user_id')->withTimestamps();;
    }
}
