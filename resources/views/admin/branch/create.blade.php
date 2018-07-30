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
            
                <div class="row">
                {!! Form::open(['route' => 'branch.store', 'files' => 'true']) !!}

                    <div class="form-group col-sm-6">
                        {!! Form::label('shopid', 'Shop') !!}
                        <select id="shop_id" name="shop_id" class="form-control">
                            @foreach ($shops as $shop)
                                <option value="{{ $shop->id }}">{{ $shop->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @include('admin.branch.fields')

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('branch.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection