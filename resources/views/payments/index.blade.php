@extends('layout')
@section('content')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Payments</div>

                <div class="card-body">
                    <a href="{{ route('payments.create') }}" class="btn btn-primary mb-3">Create New Payment</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Prix</th>
                                    <th>Date Paiement</th>
                                    <th>Reste</th>
                                    <th>Permis</th>
                                    <th>Candidat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->id }}</td>
                                        <td>{{ $payment->prix }}</td>
                                        <td>{{ $payment->date_paiement }}</td>
                                        <td>{{ $payment->reste }}</td>
                                        <td>{{ $payment->permis->type }}</td>
                                        <td>{{ $payment->candidat->cin }}</td>
                                        <td>
                                            <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-sm btn-info">View</a>
                                            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('payments.destroy', $payment) }}" method="POST" style="display: inline;">
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
