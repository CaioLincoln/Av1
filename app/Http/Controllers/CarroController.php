<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index(){

        $carros = Carro::all();
        return view('carro',['carros' => $carros]);
    }

    public function store(Request $request){
        
        $carro = new Carro;
        $carro ->placa = $request->placa;
        $carro ->modelo = $request->modelo;
        $carro ->cor = $request->cor;
        $carro ->valor = $request->valor;

        $carro->save();
        // return redirect('/vendedor');
        return redirect('/carro')->with('msg', 'Carro criado!');
    }

    public function destroy($id){

        Carro::findOrFail($id)->delete();

        return redirect('/carro')->with('msg', 'Carro deletado!');
    }

    public function edit($id){

        $carro = Carro::findOrFail($id);
        return view('carroEdit',['carro' => $carro]);
    }

    public function update(Request $request, Carro $carro)
    {
        Carro::findOrFail($request->id)->update($request->all());

        return redirect('/carro')->with('msg', 'Carro modificado com sucesso!');
    }
}
