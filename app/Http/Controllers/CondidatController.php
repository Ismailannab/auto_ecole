<?php

namespace App\Http\Controllers;

use App\Models\Condidat;
use App\Models\Moniteur;
use App\Models\Permis;
use Illuminate\Http\Request;

class CondidatController extends Controller
{
    public function index()
    {
        $condidats = Condidat::with(['moniteur', 'permis'])->get();
        return view('condidats.index', compact('condidats'));
    }

    public function create()
    {
        $moniteurs = Moniteur::all();
        $permis = Permis::all();
        return view('condidats.create', compact('moniteurs', 'permis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sex' => 'required',
            'date_naissance' => 'required|date',
            'cin' => 'required|unique:condidats',
            'date_inscription' => 'required|date',
            'id_moniteur' => 'required|exists:moniteurs,id',
            'id_permis' => 'required|exists:permis,id'
        ]);

        Condidat::create($request->all());

        return redirect()->route('condidats.index')
            ->with('success', 'Condidat created successfully.');
    }

    public function show(Condidat $condidat)
    {
        $condidat->load(['moniteur', 'permis']);
        return view('condidats.show', compact('condidat'));
    }

    public function edit(Condidat $condidat)
    {
        $moniteurs = Moniteur::all();
        $permis = Permis::all();
        return view('condidats.edit', compact('condidat', 'moniteurs', 'permis'));
    }

    public function update(Request $request, Condidat $condidat)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sex' => 'required',
            'date_naissance' => 'required|date',
            'cin' => 'required|unique:condidats,cin,' . $condidat->id,
            'date_inscription' => 'required|date',
            'id_moniteur' => 'required|exists:moniteurs,id',
            'id_permis' => 'required|exists:permis,id'
        ]);

        $condidat->update($request->all());

        return redirect()->route('condidats.index')
            ->with('success', 'Condidat updated successfully.');
    }

    public function destroy(Condidat $condidat)
    {
        $condidat->delete();

        return redirect()->route('condidats.index')
            ->with('success', 'Condidat deleted successfully.');
    }
}
