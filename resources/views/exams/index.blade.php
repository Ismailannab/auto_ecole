@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Exams</div>
                    <a href="{{ route('exams.create') }}" class="btn btn-primary mb-3">add un exam</a>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Condidate</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exams as $exam)
                                    <tr>
                                        <td>{{ $exam->type }}</td>
                                        <td>{{ $exam->exam_date }}</td>
                                        <td>{{ $exam->condidat->cin }} </td>
                                        <td>
                                            <a href="{{ route('exams.show', $exam) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('exams.edit', $exam) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('exams.destroy', $exam) }}" method="POST" style="display: inline;">
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
                </div>
            </div>
        </div>
    </div>
@endsection
