<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        $buscaNoBanco = Serie::all();
        $serie = $buscaNoBanco->nome; 
        return view ('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        echo "Série com id {$serie->id} criada: {$serie->nome}";
        return redirect('/series');
    }
}