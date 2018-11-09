@extends('employees.templates.master')

@section('content')

    <h2>Read Data</h2>
    <hr/>
    <a class="btn btn-primary" href="employees/create" style="margin-bottom: 15px;">Create New</a>

    @if(Session::has('message'))
    <div class="alert-custom">
        <p>{{ Session('message') }}</p>
    </div>
    @endif()

    <table class="table table-bordered" id="index">
        <thead>
        <tr>
            <th style="padding-left: 15px;">#</th>
            <th>Name</th>
            <th>Personal code</th>
            <th>Birthday</th>
            <th width="150px;">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($employees as $employee)
            <tr>
                <td style="padding-left: 15px;">{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->personal_code }}</td>
                <td>{{ \Carbon\Carbon::parse($employee->birthday)->format('d/m/Y') }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="employees/{{ $employee->id }}">Show</a>

                    <a class="btn btn-success btn-sm" href="employees/{{ $employee->id }}/edit">Edit</a>

                    {{ Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/employees/' . $employee->id]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection()