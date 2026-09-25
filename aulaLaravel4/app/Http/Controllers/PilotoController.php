<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use Illuminate\Http\Request;

class PilotoController extends Controller
{
    public function create(){
        return view('Piloto.create');
    }

    public function store(Request $request){
        Piloto::create($request->all());
        dd("Piloto cadastrado!!");
    }

    public function index(){
        $pilotos = Piloto::all();

        return view('Piloto.index', compact('pilotos'));
    }

    public function edit(Piloto $piloto){
        return view('Piloto.edit', compact('piloto'));
    }

    public function update(Request $request, Piloto $piloto){
        $piloto->update($request->all());
    }

    public function destroy(Piloto $piloto){
        $piloto -> delete();
    }
}
 