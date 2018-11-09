@extends('employees.templates.master')

@section('content')

    <h2>Update Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/employees" style="margin-bottom: 15px;">Read Data</a>

    {{ Form::open(['id' => 'dataForm', 'method' => 'PATCH' , 'url' => '/employees/' . $employee->id ]) }}
    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', $employee->name, ['placeholder' => 'Enter name', 'class' => 'form-control']) }}

        @if ($errors->has('name'))
        <span class="help-block">
        {{ $errors->first() }}
        </span>
        @endif
    </div>

    <div class="form-group {{$errors->has('personal_code') ? 'has-error' : ''}}">
        {{ Form::label('personal_code', 'Personal Code') }}
        {{ Form::text('personal_code', $employee->personal_code, ['placeholder' => 'Enter Personal code', 'class' => 'form-control']) }}

        @if ($errors->has('personal_code'))
        <span class="help-block">
        {{ $errors->first() }}
        </span>
        @endif
    </div>

    <div class="form-group {{$errors->has('birthday') ? 'has-error' : ''}}">
        {{ Form::label('birthday', 'Birthday') }}
        {{ Form::date('birthday', $employee->birthday, ['placeholder' => 'Enter Birthday', 'class' => 'form-control']) }}

        @if ($errors->has('birthday'))
        <span class="help-block">
        {{ $errors->first() }}
        </span>
        @endif
    </div>

    {{ Form::submit('Update', ['class' => 'btn btn-primary pull-right']) }}

    {{ Form::close() }}
@endsection()