@extends('layout/main')

@section('title', 'Employee Detail')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Employee Detail</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $employee->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $employee->idn }}</h6>
                        <p class="card-text">{{ $employee->email }}</p>
                        <p class="card-text">{{ $employee->position }}</p>

                        <a href="{{ $employee->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/employees/{{ $employee->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/employees" class="card-link">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection