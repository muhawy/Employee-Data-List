@extends('layout/main')

@section('title', 'Add Employee Data Form')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Add Employee Data Form</h1>

                <form method="post" action="/employees">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Insert Name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">IDN</label>
                        <input type="text" class="form-control @error('idn') is-invalid @enderror" id="idn" placeholder="Insert IDN" name="idn" value="{{ old('idn') }}">
                        @error('idn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Insert Email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Position</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" placeholder="Insert Position" name="position" value="{{ old('position') }}">
                        @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection