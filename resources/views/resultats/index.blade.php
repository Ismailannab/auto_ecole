@extends('layout')

@section('content')
    <div class="container">
        <h1>Resultats</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Resultat</th>
                    <th>Exam</th>
                    <th>Permis</th>
                    <th>Condidat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultats as $resultat)
                    <tr>
                        <td>{{ $resultat->resultat }}</td>
                        <td>{{ $resultat->exam->type }}</td>
                        <td>{{ $resultat->permis->type }}</td>
                        <td>{{ $resultat->condidat->cin }}</td>
                        <td>
                            <a href="{{ route('resultats.show', $resultat) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('resultats.edit', $resultat) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('resultats.destroy', $resultat) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
