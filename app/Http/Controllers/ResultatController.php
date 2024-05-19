<?php

namespace App\Http\Controllers;

use App\Models\Resultat;
use App\Models\Exam;
use App\Models\Permis;
use App\Models\Condidat;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    public function index()
    {
        $resultats = Resultat::with(['exam', 'permis', 'condidat'])->get();
        return view('resultats.index', compact('resultats'));
    }

    public function create()
    {
        $exams = Exam::all();
        $permis = Permis::all();
        $condidats = Condidat::all();
        return view('resultats.create', compact('exams', 'permis', 'condidats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'resultat' => 'required|string',
            'exam_id' => 'required|exists:exams,id',
            'permis_id' => 'required|exists:permis,id',
            'candidat_id' => 'required|exists:candidats,id'
        ]);

        Resultat::create($request->all());

        return redirect()->route('resultats.index')
            ->with('success', 'Resultat created successfully.');
    }

    public function show(Resultat $resultat)
    {
        $resultat->load(['exam', 'permis', 'candidat']);
        return view('resultats.show', compact('resultat'));
    }

    public function edit(Resultat $resultat)
    {
        $exams = Exam::all();
        $permis = Permis::all();
        $candidats = Candidat::all();
        return view('resultats.edit', compact('resultat', 'exams', 'permis', 'candidats'));
    }

    public function update(Request $request, Resultat $resultat)
    {
        $request->validate([
            'resultat' => 'required|string',
            'exam_id' => 'required|exists:exams,id',
            'permis_id' => 'required|exists:permis,id',
            'candidat_id' => 'required|exists:candidats,id'
        ]);

        $resultat->update($request->all());

        return redirect()->route('resultats.index')
            ->with('success', 'Resultat updated successfully.');
    }

    public function destroy(Resultat $resultat)
    {
        $resultat->delete();

        return redirect()->route('resultats.index')
            ->with('success', 'Resultat deleted successfully.');
    }
}
