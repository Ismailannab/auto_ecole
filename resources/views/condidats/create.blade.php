

@extends('layout')

@section('content')

@section('content')
<div class="container">
    <h1 class="mb-4">Create Condidat</h1>
    <form action="{{ route('condidats.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="sex">Sex:</label>
            <select class="form-control" id="sex" name="sex" required>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
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
            <label for="date_inscription">Date d'Inscription:</label>
            <input type="date" class="form-control" id="date_inscription" name="date_inscription" required>
        </div>
        <div class="form-group">
            <label for="id_moniteur">Moniteur:</label>
            <select class="form-control" id="id_moniteur" name="id_moniteur" required>
                @foreach($moniteurs as $moniteur)
                    <option value="{{ $moniteur->id }}">{{ $moniteur->nom_complet }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_permis">Permis:</label>
            <select class="form-control" id="id_permis" name="id_permis" required>
                @foreach($permis as $permis)
                    <option value="{{ $permis->id }}">{{ $permis->type }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
