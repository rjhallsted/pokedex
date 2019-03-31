<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokedex;

class PokedexController extends Controller
{
    public function index() {
        $pokedexes = Pokedex::all();

        return view('pokedexes.index', compact('pokedexes'));
    }

    public function store() {
        //validate
        //persist
        Pokedex::create(request(['name']));
        
        return redirect('/pokedexes');
    }
}
