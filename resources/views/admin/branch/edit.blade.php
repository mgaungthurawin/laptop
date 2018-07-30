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
                {!! Form::model($branch, ['route' => ['branch.update', $branch->id], 'method' => 'patch', 'files' => 'true']) !!}

                    <div class="form-group col-sm-6">
                        {!! Form::label('shopid', 'Shop') !!}
                        <select id="shop_id" name="shop_id" class="form-control">
                            @foreach ($shops as $shop)
                                <option value="{{ $shop->id }}"
                                @if($shop->id == $branch->shop_id)
                                        selected
                                    @endif
                                >{{ $shop->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @include('admin.branch.fields')

                    <input type="hidden" name="img" value="{{ $branch->image }}">

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