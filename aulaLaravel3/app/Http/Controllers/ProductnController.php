<?php

namespace App\Http\Controllers;

use App\Models\productn;
use Illuminate\Http\Request;
class ProductnController extends Controller
{
    public function create(){
        return view('productn.create');
    }

    public function store(Request $request){
        Productn::create($request->all());
        dd("Produto cadastrado!!");

    }

    public function index(){
        $products = Productn::all();

        return view('productn.index', compact('products'));
    }
}
