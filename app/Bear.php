<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bear extends Model
{
    protected $fillable = array('name', 'type', 'danger_level');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each bear HAS one fish to eat
    public function fish() {
        return $this->hasOne('App\Fish'); // this matches the Eloquent model
    }


    public function trees() {
        return $this->hasMany('App\Tree');
    }

    public function picnics() {
        return $this->belongsToMany('App\Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
    }



}
