<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picnic extends Model
{
    //

    //belongsToMany (2nd table , 'pivot table' , 'Primary key of current model', foreign key of 2nd table)
    public function bears() {
        return $this->belongsToMany('App\Bear', 'bears_picnics', 'picnic_id', 'bear_id');
    }

}
