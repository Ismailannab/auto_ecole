<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Condidat;
use App\Models\Permis;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['candidat', 'permis'])->get();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $condidats = Condidat::all();
        $permis = Permis::all();
        return view('payments.create', compact('condidats', 'permis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'prix' => 'required|numeric',
            'date_paiement' => 'required|date',
            'reste' => 'required|numeric',
            'permis_id' => 'required|exists:permis,id',
            'candidat_id' => 'required|exists:condidats,id',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')
            ->with('success', 'Payment created successfully.');
    }

    public function show(Payment $payment)
    {
        $payment->load(['candidat', 'permis']);
        return view('payments.show', compact('payment'));
    }

    public function edit(Payment $payment)
    {
        $condidats = Condidat::all();
        $permis = Permis::all();
        return view('payments.edit', compact('payment', 'condidats', 'permis'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'prix' => 'required|numeric',
            'date_paiement' => 'required|date',
            'reste' => 'required|numeric',
            'permis_id' => 'required|exists:permis,id',
            'candidat_id' => 'required|exists:condidats,id',
        ]);

        $payment->update($request->all());

        return redirect()->route('payments.index')
            ->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index')
            ->with('success', 'Payment deleted successfully.');
    }
}
