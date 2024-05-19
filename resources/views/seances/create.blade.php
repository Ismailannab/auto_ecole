

@extends('layout')

@section('content')
    <div class="container">
        <h2>Create Seance</h2>
        <form action="{{ route('seances.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type_seance">Type:</label>
                <select name="type_seance" id="type_seance" class="form-control">
                    <option value="theorique">Theorique</option>
                    <option value="pratique">Pratique</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_debut">Date Debut:</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_fin">Date Fin:</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control">
            </div>
            <div class="form-group">
                <label for="horaire">Horaire:</label>
                <input type="text" name="horaire" id="horaire" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="moniteur_id">Moniteur:</label>
                <select name="moniteur_id" id="moniteur_id" class="form-control">
                    @foreach($moniteurs as $moniteur)
                        <option value="{{ $moniteur->id }}">{{ $moniteur->nom_complet }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="condidat_id">Condidat:</label>
                <select name="condidat_id" id="condidat_id" class="form-control">
                    @foreach($condidats as $condidat)
                        <option value="{{ $condidat->id }}">{{ $condidat->cin}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
