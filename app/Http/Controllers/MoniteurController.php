<?php

namespace App\Http\Controllers;

use App\Models\Moniteur;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class MoniteurController extends Controller
{
    public function index()
    {
        $moniteurs = Moniteur::with('vehicule')->get();
        return view('moniteurs.index', compact('moniteurs'));
    }

    public function create()
    {
        $vehicules = Vehicule::all();
        return view('moniteurs.create', compact('vehicules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_complet' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telephone' => 'nullable|string|max:15',
            'cin' => 'required|string|unique:moniteurs,cin|max:255',
            'date_recrutement' => 'required|date',
            'type_moniteur' => 'required|in:theorique,pratique',
            'vehicule_id' => 'nullable|exists:vehicules,id'
        ]);

        Moniteur::create([
            'nom_complet' => $request->nom_complet,
            'date_naissance' => $request->date_naissance,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'cin' => $request->cin,
            'date_recrutement' => $request->date_recrutement,
            'type_moniteur' => $request->type_moniteur,
            'vehicule_id' => $request->vehicule_id,
        ]);

        return redirect()->route('moniteurs.index')
            ->with('success', 'Moniteur created successfully.');
    }

    public function show(Moniteur $moniteur)
    {
        $moniteur->load('vehicule');
        return view('moniteurs.show', compact('moniteur'));
    }

    public function edit(Moniteur $moniteur)
    {
        $vehicules = Vehicule::all();
        return view('moniteurs.edit', compact('moniteur', 'vehicules'));
    }

    public function update(Request $request, Moniteur $moniteur)
    {
        $request->validate([
            'nom_complet' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telephone' => 'nullable|string|max:15',
            'cin' => 'required|string|unique:moniteurs,cin,' . $moniteur->id . '|max:255',
            'date_recrutement' => 'required|date',
            'type_moniteur' => 'required|in:theorique,pratique',
            'vehicule_id' => 'nullable|exists:vehicules,id'
        ]);

        $moniteur->update([
            'nom_complet' => $request->input('nom_complet'),
            'date_naissance' => $request->input('date_naissance'),
            'adresse' => $request->input('adresse'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'cin' => $request->input('cin'),
            'date_recrutement' => $request->input('date_recrutement'),
            'type_moniteur' => $request->input('type_moniteur'),
            'vehicule_id' => $request->input('vehicule_id')
        ]);

        return redirect()->route('moniteurs.index')
            ->with('success', 'Moniteur updated successfully.');
    }

    public function destroy(Moniteur $moniteur)
    {
        $moniteur->delete();

        return redirect()->route('moniteurs.index')
            ->with('success', 'Moniteur deleted successfully.');
    }
}
