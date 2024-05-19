@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1>Create Permis</h1>
        <form action="{{ route('permis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
