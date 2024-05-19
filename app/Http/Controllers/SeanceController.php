<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\Moniteur;
use App\Models\Condidat;

class SeanceController extends Controller
{
    public function index()
    {
        $seances = Seance::with('moniteur', 'candidat')->get();
        return view('seances.index', compact('seances'));
    }

    public function create()
    {
        $moniteurs = Moniteur::all();
        $condidats = Condidat::all();
        return view('seances.create', compact('moniteurs', 'condidats'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'type_seance' => 'required|in:theorique,pratique',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'horaire' => 'required|string',
            'moniteur_id' => 'required|exists:moniteurs,id',
            'candidat_id' => 'required|exists:condidats,id'
        ]);
    
        Seance::create([
            'type_seance' => $request->type_seance,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'horaire' => $request->horaire,
            'moniteur_id' => $request->moniteur_id,
            'candidat_id' => $request->candidat_id
        ]);
    
        return redirect()->route('seances.index')
            ->with('success', 'Seance created successfully.');
    }
    

    public function show(Seance $seance)
    {
        $seance->load('moniteur', 'candidat');
        return view('seances.show', compact('seance'));
    }

    public function edit(Seance $seance)
    {
        $moniteurs = Moniteur::all();
        $condidats = Condidat::all();
        return view('seances.edit', compact('seance', 'moniteurs', 'condidats'));
    }

    public function update(Request $request, Seance $seance)
    {
        $request->validate([
            'type_seance' => 'in:theorique,pratique',
            'date_debut' => 'date',
            'date_fin' => 'date|after:date_debut',
            'horaire' => 'string',
            'moniteur_id' => 'exists:moniteurs,id',
            'candidat_id' => 'exists:condidats,id'
        ]);

        $seance->update($request->all());

        return redirect()->route('seances.index')
            ->with('success', 'Seance updated successfully.');
    }

    public function destroy(Seance $seance)
    {
        $seance->delete();

        return redirect()->route('seances.index')
            ->with('success', 'Seance deleted successfully.');
    }
}
