<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index(){
        $carros = Carro::all();

        return view('carro.list', compact('carros'));
    }

    public function create(){
        return view('carro.create');
    }

    public function show(Carro $carro){
        return response()->json($carro);
    }

    public function store(Request $request){
        Carro::create([
            'nome' => $request->input('nome'),
            'cor' => $request->input('cor'),
            'preco' => $request->input('preco')
        ]);

        return redirect()->route('listaCarros');
    }
}
