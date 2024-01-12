<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function create()
    {
        return view('pokemons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable',
            'tipo' => 'nullable',
            'tamano' => 'nullable|in:grande,mediano,pequeno',
            'peso' => 'nullable|numeric',
        ]);

        Pokemon::create($request->all());

        return redirect()->route('pokemons.index')
            ->with('success', 'Pokemon creado exitosamente.');
    }

    public function edit(Pokemon $pokemon)
    {
        return view('pokemons.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemon $pokemon)
{
    $request->validate([
        'nombre' => 'nullable',
        'tipo' => 'nullable',
        'tamano' => 'nullable|in:grande,mediano,pequeno',
        'peso' => 'nullable|numeric',
    ]);

    $pokemon->update($request->all());

    return redirect()->route('pokemons.index')
        ->with('success', 'Pokemon actualizado exitosamente.');
}


    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return redirect()->route('pokemons.index')
            ->with('success', 'Pokemon eliminado exitosamente.');
    }
}
