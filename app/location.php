<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = 'location_id';

    public function entprise(){
        return $this->hasMany(Entprise::class);
    }
}
