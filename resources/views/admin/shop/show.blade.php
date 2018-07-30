@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Shop
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="form-group">
                        {!! Form::label('id', 'Id:') !!}
                        <p>{!! $shop->id !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('name', 'Shop Name:') !!}
                        <p>{!! $shop->name !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('image', 'Shop Image:') !!}
                        <p><img src="{{ asset($shop->image)}}"></p>
                    </div>
                    <a href="{!! route('shop.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection