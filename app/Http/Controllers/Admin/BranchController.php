<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Shop;
use Flash;
use App\Http\Requests\BranchRequest;
use App\Helper\ImageHelper;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::orderby('id', 'DESC')->paginate(10);
        return view('admin.branch.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = Shop::all();
        return view('admin.branch.create', compact('shops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BranchRequest $request)
    {
        $imagehelper = new ImageHelper;
        $image_name = $imagehelper->upload($request, 'image', 'images');
        $data = $request->all();
        $data['image'] = $image_name;

        Branch::create($data);
        Flash::success('successfully create the new branch');
        return redirect(route('branch.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);
        if (empty($branch)) {
            Flash::error('Branch not found');
            return redirect(route('branch.index'));
        }
        $shop = Shop::find($branch->shop_id);
        return view('admin.branch.show', compact('branch', 'shop'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);
        if (empty($branch)) {
            Flash::error('Branch not found');
            return redirect(route('branch.index'));
        }
        $selected = Branch::find($branch->id)->pluck('shop_id');
        $shops = Shop::all();

        return view('admin.branch.edit', compact('branch', 'selected', 'shops'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BranchRequest $request, $id)
    {
        $data = $request->all();
        $imagehelper = new ImageHelper;
        $image_name = $imagehelper->upload($request, 'image', 'images');
        if(is_null($image_name)) {
            $data['image'] = $data['img'];
        } else {
            $data['image'] = $image_name;
        }

        Branch::find($id)->update($data);
        Flash::success('successfully updated the branch');
        return redirect(route('branch.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Branch::find($id)->delete();
        Flash::success('successfully delete the branch');
        return redirect(route('branch.index'));
    }
}




