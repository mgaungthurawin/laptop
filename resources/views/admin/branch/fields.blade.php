
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Branch:') !!} <span class="text-danger">*</span>
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
    @if ($errors->has('location'))
        <span class="text-danger">
            <strong>{{ $errors->first('location') }}</strong>
        </span>
    @endif
</div>


<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!} <span class="text-danger">*</span>
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    @if ($errors->has('phone'))
        <span class="text-danger">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
    @if ($errors->has('address'))
        <span class="text-danger">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
    @endif
</div>

