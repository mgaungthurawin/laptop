<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Session;

class ProductController extends Controller
{
    public function products($id) {
        Session::put('branch_id', $id);
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

    public function productbrand($brand) {
        $branch_id = Session::get('branch_id');
        $items = Item::where('brand', $brand)
                    ->where('branch_id', $branch_id)
                    ->orderBy('id', 'desc')->paginate(12);
        return view('products', compact('items'));
    }
}
