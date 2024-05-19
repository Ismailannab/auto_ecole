

@extends('layout')

@section('content')

@section('content')
<div class="container">
    <h1 class="mb-4">Condidats</h1>
    <a href="{{ route('condidats.create') }}" class="btn btn-primary mb-3">Create New Condidat</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sex</th>
                <th>Date Naissance</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>CIN</th>
                <th>Date Inscription</th>
                <th>Moniteur</th>
                <th>Permis</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($condidats as $condidat)
            <tr>
                <td>{{ $condidat->id }}</td>
                <td>{{ $condidat->nom }}</td>
                <td>{{ $condidat->prenom }}</td>
                <td>{{ $condidat->sex }}</td>
                <td>{{ $condidat->date_naissance }}</td>
                <td>{{ $condidat->adresse }}</td>
                <td>{{ $condidat->email }}</td>
                <td>{{ $condidat->telephone }}</td>
                <td>{{ $condidat->cin }}</td>
                <td>{{ $condidat->date_inscription }}</td>
                <td>{{ $condidat->moniteur->nom_complet }}</td>
                <td>{{ $condidat->permis->type }}</td>
                <td>
                    <a href="{{ route('condidats.show', $condidat->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('condidats.edit', $condidat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('condidats.destroy', $condidat->id) }}" method="POST" style="display:inline;">
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
