@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1>Permis</h1>
        <a href="{{ route('permis.create') }}" class="btn btn-primary mb-3">Create New Permis</a>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permis as $permisItem)
                <tr>
                    <td>{{ $permisItem->id }}</td>
                    <td>{{ $permisItem->type }}</td>
                    <td>
                        <a href="{{ route('permis.show', $permisItem->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('permis.edit', $permisItem->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('permis.destroy', $permisItem->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
