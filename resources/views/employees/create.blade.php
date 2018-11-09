@extends('employees.templates.master')

@section('content')

    <h2>Create Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/employees" style="margin-bottom: 15px;">Read Data</a>

    {{ Form::open(['id' => 'dataForm', 'url' => '/employees']) }}
    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, ['placeholder' => 'Enter name', 'class' => 'form-control']) }}
        
        @if ($errors->has('name'))
        <span class="help-block">
        {{ $errors->first() }}
        </span>
        @endif
    </div>
    

    <div class="form-group {{$errors->has('personal_code') ? 'has-error' : ''}}">
        {{ Form::label('personal_code', 'Personal Code') }}
        {{ Form::number('personal_code', null, ['placeholder' => 'Enter Personal code', 'oninput'=>'javascript: if (this.value.length > this.maxLength) 
this.value = this.value.slice(0, this.maxLength);', 'maxlength' => '11', 'class' => 'form-control', 'required']) }}

        @if ($errors->has('personal_code'))
        <span class="help-block">
        {{ $errors->first() }}
        </span>
        @endif
    </div>

    <div class="form-group {{$errors->has('birthday') ? 'has-error' : ''}}">
        {{ Form::label('birthday', 'Birthday') }}
        {{ Form::date('birthday', null, ['placeholder' => 'Enter Birthday', 'class' => 'form-control', 'required']) }}
        @if ($errors->has('birthday'))
        <span class="help-block">
        {{ $errors->first() }}
        </span>
        @endif
    </div>

    {{ Form::submit('Create', ['class' => 'btn btn-primary pull-right']) }}

    {{ Form::close() }}
@endsection()