<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $primaryKey = 'enterprise_id';

    public function user(){
    	return $this->hasMany(User::class);
    }

    public function role(){
    	return $this->hasMany(Role::class);
    }

    public function accountHead(){
    	return $this->hasMany(AccountHead::class);
    }

    public function location(){
    	return $this->hasMany(Location::class);
    }

    public function transaction(){
    	return $this->hasMany(Transaction::class);
    }
}
