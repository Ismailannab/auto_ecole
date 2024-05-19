<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Condidat;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::with('condidat')->get();
        return view('exams.index', compact('exams'));
    }

    public function create()
    {
        $condidates = Condidat::all();
        return view('exams.create', compact('condidates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'exam_date' => 'required|date',
            'condidat_id' => 'required|exists:condidats,id',
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
        $condidates = Condidat::all();
        return view('exams.edit', compact('exam', 'condidates'));
    }

    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'type' => 'required|string',
            'exam_date' => 'required|date',
            'condidat_id' => 'required|exists:condidats,id',
        ]);

        $exam->update([
            'type' => $request->type,
            'exam_date' => $request->exam_date,
            'condidat_id' => $request->condidat_id,
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
