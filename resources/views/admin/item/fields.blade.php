
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!} <span class="text-danger">*</span>
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
    @if ($errors->has('model'))
        <span class="text-danger">
            <strong>{{ $errors->first('model') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('cpu', 'CPU:') !!} <span class="text-danger">*</span>
    {!! Form::text('cpu', null, ['class' => 'form-control']) !!}
    @if ($errors->has('cpu'))
        <span class="text-danger">
            <strong>{{ $errors->first('cpu') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
    @if ($errors->has('price'))
        <span class="text-danger">
            <strong>{{ $errors->first('price') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('memory', 'Memory:') !!} <span class="text-danger">*</span>
    {!! Form::text('memory', null, ['class' => 'form-control']) !!}
    @if ($errors->has('memory'))
        <span class="text-danger">
            <strong>{{ $errors->first('memory') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('hardisk', 'Hardisk:') !!}
    {!! Form::text('hardisk', null, ['class' => 'form-control']) !!}
    @if ($errors->has('hardisk'))
        <span class="text-danger">
            <strong>{{ $errors->first('hardisk') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('display', 'Display:') !!}
    {!! Form::text('display', null, ['class' => 'form-control']) !!}
    @if ($errors->has('display'))
        <span class="text-danger">
            <strong>{{ $errors->first('display') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('battery', 'Battery:') !!}
    {!! Form::text('battery', null, ['class' => 'form-control']) !!}
    @if ($errors->has('battery'))
        <span class="text-danger">
            <strong>{{ $errors->first('battery') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
    @if ($errors->has('image'))
        <span class="text-danger">
            <strong>{{ $errors->first('image') }}</strong>
        </span>
    @endif
</div>







