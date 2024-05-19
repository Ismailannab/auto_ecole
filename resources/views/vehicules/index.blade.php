@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vehicules</div>

                <div class="card-body">
                    <a href="{{ route('vehicules.create') }}" class="btn btn-primary mb-2">Add Vehicule</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Modele</th>
                                <th>Marque</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicules as $vehicule)
                            <tr>
                                <td>{{ $vehicule->id }}</td>
                                <td>{{ $vehicule->type }}</td>
                                <td>{{ $vehicule->modele }}</td>
                                <td>{{ $vehicule->marque }}</td>
                                <td>
                                    <a href="{{ route('vehicules.show', $vehicule->id) }}" class="btn btn-sm btn-primary">View</a>
                                    <a href="{{ route('vehicules.edit', $vehicule->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('vehicules.destroy', $vehicule->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
