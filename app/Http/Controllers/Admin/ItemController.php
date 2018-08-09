<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Branch;
use Flash;
use App\Helper\ImageHelper;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderby('id', 'desc')->paginate(10);
        return view('admin.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = Shop::all();
        $branches = Branch::all();
        return view('admin.item.create', compact('shops', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagehelper = new ImageHelper;
        $image_name = $imagehelper->upload($request, 'image', 'images');
        $data = $request->all();
        $data['image'] = $image_name;

        Item::create($data);
        Flash::success('successfully save the item');
        return redirect(route('item.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        if (empty($item)) {
            Flash::error('Item not found');
            return redirect(route('item.index'));
        }

        return view('admin.item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shops = Shop::all();
        $branches = Branch::all();
        $item = Item::find($id);
        if (empty($item)) {
            Flash::error('Item not found');
            return redirect(route('item.index'));
        }
        $shopArr[] = $item->shop_id;
        $brandArr[] = $item->brand;
        $branchArr[] = $item->branch_id;
        return view('admin.item.edit', compact('shops', 'branches', 'item', 'shopArr', 'branchArr', 'brandArr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $imagehelper = new ImageHelper;
        $image_name = $imagehelper->upload($request, 'image', 'images');
        if(is_null($image_name)) {
            $data['image'] = $data['img'];
        } else {
            $data['image'] = $image_name;
        }

        Item::find($id)->update($data);
        Flash::success('successfully updated the item');
        return redirect(route('item.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
