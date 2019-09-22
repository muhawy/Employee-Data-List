@extends('layout/main')

@section('title', 'Employee List')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Employee List</h1>

                <a href="/employees/create" class="btn btn-primary my-3">Add Employee Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach( $employees as $employee )
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $employee->name }}
                        <a href="/employees/{{ $employee->id }}" class="badge badge-info">detail</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection