<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Branch;

class WelcomeController extends Controller
{
    public function index() {
    	$shops = Shop::all();
    	return view('welcome', compact('shops'));
    }

    public function branches($id) {
    	$branches = Branch::where('shop_id', $id)->get();
    	return view('branches', compact('branches'));
    }

    public function allbranches() {
    	$branches = Branch::orderBy('id', 'DESC')->paginate(12);
    	return view('branches', compact('branches'));	
    }
}
