<?php
namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Greys anatomy',
            'Lost', 
            'Agents of SHIELD'
        ];

        // chamando a pasta na view seguido do nome do metodo
        return view('series.index', compact('series')
            // ou 
            // return view('series.index', [
                // 'series' => $series
                // ]
        );
        // procura na pasta serie o arquivo index
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());
    }
}