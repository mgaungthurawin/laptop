@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Item
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
            
                <div class="row">
                {!! Form::model($item, ['route' => ['item.update', $item->id], 'method' => 'patch', 'files' => 'true']) !!}

                    <div class="form-group col-sm-6">
                        {!! Form::label('shopid', 'Shop') !!}
                        <select id="shop_id" name="shop_id" class="form-control">
                            @foreach ($shops as $shop)
                                <option value="{{ $shop->id }}"
                                @if(in_array($shop->id, $shopArr))
                                selected
                                @endif
                                >{{ $shop->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('shopid', 'Branch') !!}
                        <select id="branch_id" name="branch_id" class="form-control">
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->id }}"
                                @if(in_array($branch->id, $branchArr))
                                selected
                                @endif
                                >{{ $branch->location}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('brand', 'Brand') !!}
                        <select id="brand" name="brand" class="form-control">
                            @foreach (config('brand.brand') as $brand)
                                <option value="{{ $brand }}"
                                    @if(in_array($brand, $brandArr))
                                    selected
                                    @endif 
                                >{{ $brand}}</option>
                            @endforeach
                        </select>
                    </div>

                    @include('admin.item.fields')

                    <input type="hidden" name="img" value="{{ $item->image }}">

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('item.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection