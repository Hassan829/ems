<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    protected $primaryKey = 'transaction_type_id';

    public function entprise(){
        return $this->hasMany(Entprise::class);
    }
}
