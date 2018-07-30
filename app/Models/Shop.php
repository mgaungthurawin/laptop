<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'name', 'image',
    ];

    public function branches() {
    	return $this->hasMany('App\Models\Branch');
    }
}
