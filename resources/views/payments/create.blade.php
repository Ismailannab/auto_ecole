@extends('layout')
@section('content')
    


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Payment</div>

                <div class="card-body">
                    <form action="{{ route('payments.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="prix">Prix:</label>
                            <input type="text" name="prix" id="prix" class="form-control" value="{{ old('prix') }}">
                        </div>
                        <div class="form-group">
                            <label for="date_paiement">Date Paiement:</label>
                            <input type="date" name="date_paiement" id="date_paiement" class="form-control" value="{{ old('date_paiement') }}">
                        </div>
                        <div class="form-group">
                            <label for="reste">Reste:</label>
                            <input type="text" name="reste" id="reste" class="form-control" value="{{ old('reste') }}">
                        </div>
                        <div class="form-group">
                            <label for="permis_id">Permis:</label>
                            <select name="permis_id" id="permis_id" class="form-control">
                                @foreach ($permis as $perm)
                                    <option value="{{ $perm->id }}">{{ $perm->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="condidat_id">Condidat:</label>
                            <select name="condidat_id" id="condidat_id" class="form-control">
                                @foreach ($condidats as $condidat)
                                    <option value="{{ $condidat->id }}">{{ $condidat->cin }} </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
