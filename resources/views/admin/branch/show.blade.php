@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Branch
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="form-group">
                        {!! Form::label('Shop', 'Shop:') !!}
                        <p>{!! $shop->name !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('branch', 'Branch:') !!}
                        <p>{!! $branch->location !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'Address:') !!}
                        <p>{!! $branch->address !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone:') !!}
                        <p>{!! $branch->phone !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        <p>{!! $branch->email !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('image', 'Image:') !!}
                        <p><img src="{{ asset($shop->image)}}"></p>
                    </div>

                    <a href="{!! route('branch.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection