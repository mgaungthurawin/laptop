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
                        {!! Form::label('Shop', 'Location:') !!}
                        <p>{!! $item->location !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('branch', 'Model:') !!}
                        <p>{!! $item->model !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'CPU:') !!}
                        <p>{!! $item->cpu !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Price:') !!}
                        <p>${!! $item->price !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Memory:') !!}
                        <p>{!! $item->memeory !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Hardisk:') !!}
                        <p>{!! $item->hardisk !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Display:') !!}
                        <p>{!! $item->display !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Battery:') !!}
                        <p>{!! $item->battery !!}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('image', 'Image:') !!}
                        <p><img src="{{ asset($item->image)}}"></p>
                    </div>

                    <a href="{!! route('branch.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection