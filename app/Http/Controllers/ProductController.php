<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ProductController extends Controller
{
    public function products($id) {
    	$items = Item::where('branch_id', $id)->paginate(12);
    	return view('products', compact('items'));
    }

    public function allproducts() {
    	$items = Item::orderBy('id', 'desc')->paginate(12);
    	return view('products', compact('items'));	
    }

    public function single($id) {
    	$item = Item::find($id);
    	return view('single', compact('item'));
    }
}
