<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'transaction_id';

    public function entprise(){
        return $this->hasMany(Entprise::class);
    }
}
