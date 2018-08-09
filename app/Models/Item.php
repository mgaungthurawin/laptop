<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'shop_id', 'branch_id', 'brand', 'model', 'cpu', 'price', 'memory', 'hardisk', 'display', 'camera', 'vga', 'color', 'battery', 'image',
    ];
}
