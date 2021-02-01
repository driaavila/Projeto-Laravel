<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;

class ReceitaController extends Controller
{
    public function index(){
        $receita = Receita::all();
        return view('welcome', ['receita' => $receita]);
    }

    public function create(){
        return view('receitas.create');
    }

    public function store(Request $request) {
        $receita = new Receita;

        $receita->title = $request->title;
        $receita->ingredients = $request->ingredients;
        $receita->preparation = $request->preparation;

        //Image Upload
        if($request->hasFile('image') && $request->file("image")->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now").".".$extension);

            $requestImage->move(public_path('img/receitas'), $imageName);

            $receita->image = $imageName;
        }

        $receita->save();

        return redirect('/')->with('msg', 'Receita cadastrada com sucesso!');
    }

    public function show($id){
        $receita = Receita::findOrFail($id);

        return view('receitas.show', ['receita' => $receita]);
    }
}


