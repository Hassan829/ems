<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountHead extends Model
{
    protected $primaryKey = 'account_head_id';

    public function entprise(){
        return $this->hasMany(Entprise::class);
    }
}
