<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use Flash;
use App\Http\Requests\ShopRequest;
use App\Helper\ImageHelper;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::orderby('id', 'DESC')->paginate(10);
        return view('admin.shop.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopRequest $request)
    {
        $imagehelper = new ImageHelper;
        $image_name = $imagehelper->upload($request, 'image', 'images');
        $data = $request->all();
        $data['image'] = $image_name;
        Shop::create($data);
        Flash::success('successfully create the shop');
        return redirect(route('shop.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        if (empty($shop)) {
            Flash::error('Shop not found');
            return redirect(route('shop.index'));
        }
        return view('admin.shop.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        if (empty($shop)) {
            Flash::error('Shop not found');
            return redirect(route('shop.index'));
        }
        return view('admin.shop.edit', compact('shop'));
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

        Shop::find($id)->update($data);
        Flash::success('successfully update shop');
        return redirect(route('shop.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shop::find($id)->delete();
        Flash::success('successfully delete the');
    }
}
