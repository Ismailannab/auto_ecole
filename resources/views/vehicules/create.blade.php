@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Vehicule</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('vehicules.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                        </div>

                        <div class="form-group">
                            <label for="modele">Modele</label>
                            <input type="text" class="form-control" id="modele" name="modele" required>
                        </div>

                        <div class="form-group">
                            <label for="marque">Marque</label>
                            <input type="text" class="form-control" id="marque" name="marque" required>
                        </div>

                        <div class="form-group">
                            <label for="annee">Annee</label>
                            <input type="number" class="form-control" id="annee" name="annee" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
