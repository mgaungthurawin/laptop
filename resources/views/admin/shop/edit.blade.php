@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            shop
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
            
                <div class="row">
                {!! Form::model($shop, ['route' => ['shop.update', $shop->id], 'method' => 'patch', 'files' => 'true']) !!}

                    @include('admin.shop.fields')

                    <input type="hidden" name="img" value="{{$shop->image}}">
                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('shop.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection