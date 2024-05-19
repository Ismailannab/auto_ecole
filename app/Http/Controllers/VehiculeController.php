<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('vehicules.index', compact('vehicules'));
    }

    public function create()
    {
        return view('vehicules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'annee' => 'required|integer'
        ]);

        Vehicule::create($request->all());

        return redirect()->route('vehicules.index')
            ->with('success', 'Vehicule created successfully.');
    }

    public function show(Vehicule $vehicule)
    {
        return view('vehicules.show', compact('vehicule'));
    }

    public function edit(Vehicule $vehicule)
    {
        return view('vehicules.edit', compact('vehicule'));
    }

    public function update(Request $request, Vehicule $vehicule)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'annee' => 'required|integer'
        ]);

        $vehicule->update($request->all());

        return redirect()->route('vehicules.index')
            ->with('success', 'Vehicule updated successfully.');
    }

    public function destroy(Vehicule $vehicule)
    {
        $vehicule->delete();

        return redirect()->route('vehicules.index')
            ->with('success', 'Vehicule deleted successfully.');
    }
}
