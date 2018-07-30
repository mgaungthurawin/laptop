
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Shop Name:') !!} <span class="text-danger">*</span>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if ($errors->has('name'))
        <span class="text-danger">
            <strong>{{ $errors->first('name') }}</strong>
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

