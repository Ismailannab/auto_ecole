

@extends('layout')

@section('content')
    <div class="container">
        <h2>Seances</h2>
        <a href="{{ route('seances.create') }}" class="btn btn-primary mb-3">Create Seance</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    <th>horaire</th>

                    <th>Moniteur</th>
                    <th>Candidat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seances as $seance)
                    <tr>
                        <td>{{ $seance->type_seance }}</td>
                        <td>{{ $seance->date_debut }}</td>
                        <td>{{ $seance->date_fin }}</td>
                        <td>{{ $seance->horaire }}</td>
                        <td>{{ $seance->moniteur->nom_complet }}</td>
                        <td>{{ $seance->candidat->cin }}</td>
                        <td>
                            <a href="{{ route('seances.show', $seance) }}" class="btn btn-info">View</a>
                            <a href="{{ route('seances.edit', $seance) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('seances.destroy', $seance) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
