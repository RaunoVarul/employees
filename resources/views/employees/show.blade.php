@extends('employees.templates.master')

@section('content')

    <h2>{{ $employee->name }}</h2>
    <hr/>
    <a class="btn btn-primary" href="/employees" style="margin-bottom: 15px;">Read Data</a>

    <table class="table table-bordered">
        <tbody>
            <tr>
                <td style="padding-left: 15px;"><b>#</b></td>
                <td> {{ $employee->id }}</td>
            </tr>
            <tr>
                <td><b>Name: </b></td>
                <td>{{ $employee->name }}</td>
            </tr>
            <tr>
                <td><b>Personal code: </b></td>
                <td>{{ $employee->personal_code }}</td>
                </tr>
            <tr>
                <td><b>Birthday: </b></td>
                <td>{{ \Carbon\Carbon::parse($employee->birthday)->format('d/m/Y') }}</td>
            </tr>
        </tbody>
    </table>

@endsection()