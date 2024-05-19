@extends('layout')

@section('content')
    <div class="container">
        <h1>Create Resultat</h1>
        <form action="{{ route('resultats.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="resultat">Resultat</label>
                <input type="text" name="resultat" id="resultat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exam_id">Exam</label>
                <select name="exam_id" id="exam_id" class="form-control" required>
                    @foreach ($exams as $exam)
                        <option value="{{ $exam->id }}">{{ $exam->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="permis_id">Permis</label>
                <select name="permis_id" id="permis_id" class="form-control" required>
                    @foreach ($permis as $perm)
                        <option value="{{ $perm->id }}">{{ $perm->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="condidat_id">Condidat</label>
                <select name="condidat_id" id="condidat_id" class="form-control" required>
                    @foreach ($condidats as $condidat)
                        <option value="{{ $condidat->id }}">{{ $condidat->nom }} {{ $condidat->prenom }}</option>
                    @endforeach
                </select>
            
            
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
