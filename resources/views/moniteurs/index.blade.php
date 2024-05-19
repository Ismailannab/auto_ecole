<!-- resources/views/moniteurs/index.blade.php -->

@extends('layout')

@section('content')

@section('content')
<div class="container">
    <h1 class="mb-4">Moniteurs</h1>
    <a href="{{ route('moniteurs.create') }}" class="btn btn-primary mb-3">Create New Moniteur</a>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nom Complet</th>
                <th>Date de Naissance</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>CIN</th>
                <th>Date de Recrutement</th>
                <th>Type de Moniteur</th>
                <th>Véhicule</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($moniteurs as $moniteur)
            <tr>
                <td>{{ $moniteur->id }}</td>
                <td>{{ $moniteur->nom_complet }}</td>
                <td>{{ $moniteur->date_naissance }}</td>
                <td>{{ $moniteur->adresse }}</td>
                <td>{{ $moniteur->email }}</td>
                <td>{{ $moniteur->telephone }}</td>
                <td>{{ $moniteur->cin }}</td>
                <td>{{ $moniteur->date_recrutement }}</td>
                <td>{{ $moniteur->type_moniteur }}</td>
                <td>
                    @if($moniteur->vehicule)
                        {{ $moniteur->vehicule->type}} 
                    @else
                        No vehicle assigned
                    @endif
                </td>
                <td>
                    <a href="{{ route('moniteurs.show', $moniteur->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('moniteurs.edit', $moniteur->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('moniteurs.destroy', $moniteur->id) }}" method="POST" style="display:inline;">
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
