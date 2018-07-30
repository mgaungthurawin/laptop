<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
	protected $table = 'branch';

    protected $fillable = [
        'shop_id', 'location', 'address', 'phone', 'image', 'email',
    ];

    public function shops() {
    	return $this->BelongsTo('App\Models\Shop');
    }
}
