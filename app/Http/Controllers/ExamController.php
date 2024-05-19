<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Condidat;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::with('candidat')->get();
        return view('exams.index', compact('exams'));
    }

    public function create()
    {
        $candidates = Condidat::all();
        return view('exams.create', compact('candidates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'exam_date' => 'required|date',
            'candidat_id' => 'required|exists:condidats,id',
        ]);

        Exam::create($request->all());

        return redirect()->route('exams.index')
            ->with('success', 'Exam created successfully.');
    }

    public function show(Exam $exam)
    {
        return view('exams.show', compact('exam'));
    }

    public function edit(Exam $exam)
    {
        $candidates = Condidat::all();
        return view('exams.edit', compact('exam', 'candidates'));
    }

    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'type' => 'required|string',
            'exam_date' => 'required|date',
            'candidat_id' => 'required|exists:condidats,id',
        ]);

        $exam->update([
            'type' => $request->type,
            'exam_date' => $request->exam_date,
            'candidat_id' => $request->candidat_id,
        ]);

        return redirect()->route('exams.index')
            ->with('success', 'Exam updated successfully');
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();

        return redirect()->route('exams.index')
            ->with('success', 'Exam deleted successfully');
    }
}
