<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'role_id';

    public function entprise(){
        return $this->hasMany(Entprise::class);
    }
}
