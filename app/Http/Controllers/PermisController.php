<?php

namespace App\Http\Controllers;

use App\Models\Permis;
use Illuminate\Http\Request;

class PermisController extends Controller
{
    public function index()
    {
        $permis = Permis::all();
        return view('permis.index', compact('permis'));
    }

    public function create()
    {
        return view('permis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|unique:permis'
        ]);

        Permis::create($request->all());

        return redirect()->route('permis.index')
            ->with('success', 'Permis created successfully.');
    }

    public function show(Permis $permis)
    {
        return view('permis.show', compact('permis'));
    }

    public function edit(Permis $permis)
    {
        return view('permis.edit', compact('permis'));
    }

    public function update(Request $request, Permis $permis)
    {
        $request->validate([
            'type' => 'required|unique:permis,type,' . $permis->id
        ]);

        $permis->update($request->all());

        return redirect()->route('permis.index')
            ->with('success', 'Permis updated successfully.');
    }

    public function destroy(Permis $permis)
    {
        $permis->delete();

        return redirect()->route('permis.index')
            ->with('success', 'Permis deleted successfully.');
    }
}
