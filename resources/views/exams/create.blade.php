@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Exam</div>

                    <div class="card-body">
                        <form action="{{ route('exams.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="type">Type:</label>
                                <input type="text" name="type" id="type" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exam_date">Exam Date:</label>
                                <input type="date" name="exam_date" id="exam_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="condidat_id">Condidate:</label>
                                <select name="condidat_id" id="condidat_id" class="form-control">
                                    @foreach ($condidates as $condidat)
                                        <option value="{{ $condidat->id }}">{{ $condidat->cin }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Exam</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
