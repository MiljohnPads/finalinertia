<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Citezen;

class CitezenController extends Controller
{
    public function index() {
        return Inertia::render('Citezen', [
            'citezens' => Citezen::orderBy('name')->get(),
        ]);
    }

    public function show(Citezen $citezen)
    {
        return Inertia::render('citezens/view', ['citezen' => $citezen]);
    }

    public function create()
    {
        return Inertia::render('citezens/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'sex' => 'required|in:male,female,other',
            'description' => 'nullable|string',
        ]);

        Citezen::create($validatedData);

        return redirect('/citezens')->with('success', 'Citezen created successfully');
    }

    public function edit(Citezen $citezen)
    {
        return Inertia::render('citezens/edit', ['citezen' => $citezen]);
    }

    public function update(Request $request, Citezen $citezen)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'sex' => 'required|in:male,female,other',
            'description' => 'nullable|string',
        ]);

        $citezen->update($validatedData);

        return redirect('/citezens')->with('success', 'Citezen updated successfully');
    }

    public function destroy(Citezen $citezen)
    {
        $citezen->delete();

        return redirect('/citezens')->with('success', 'Citezen deleted successfully');
    }
}
