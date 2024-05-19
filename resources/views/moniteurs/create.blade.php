@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Create Moniteur</h1>
    <form action="{{ route('moniteurs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom_complet">Nom Complet:</label>
            <input type="text" class="form-control" id="nom_complet" name="nom_complet" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance:</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone:</label>
            <input type="text" class="form-control" id="telephone" name="telephone">
        </div>
        <div class="form-group">
            <label for="cin">CIN:</label>
            <input type="text" class="form-control" id="cin" name="cin" required>
        </div>
        <div class="form-group">
            <label for="date_recrutement">Date de Recrutement:</label>
            <input type="date" class="form-control" id="date_recrutement" name="date_recrutement" required>
        </div>
        <div class="form-group">
            <label for="type_moniteur">Type de Moniteur:</label>
            <select class="form-control" id="type_moniteur" name="type_moniteur" required>
                <option value="theorique">Théorique</option>
                <option value="pratique">Pratique</option>
            </select>
        </div>
        <div class="form-group">
            <label for="vehicule_id">Véhicule:</label>
            <select class="form-control" id="vehicule_id" name="vehicule_id">
                <option value="">Select Vehicule</option>
                @foreach($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}">{{ $vehicule->type }} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
