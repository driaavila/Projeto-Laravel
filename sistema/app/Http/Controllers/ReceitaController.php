<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;
use App\Models\User;

class ReceitaController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $receita = Receita::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $receita = Receita::all();
        }        
        
        return view('welcome', ['receita' => $receita, 'search' => $search]);
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

        $user = auth()->user();
        $receita->user_id = $user->id;

        
        $receita->save();

        return redirect('/')->with('msg', 'Receita cadastrada com sucesso!');
    }

    public function show($id){
        $receita = Receita::findOrFail($id);

        $receitaOwner = User::where('id', $receita->user_id)->first()->toArray();

        return view('receitas.show', ['receita' => $receita, 'receitasOwner' => $receitaOwner]);
    }

    public function dashboard(){

        $user = auth()->user();

        $receitas = $user->receitas;

        return view('receitas.dashboard', ['receitas' => $receitas]);

    }

    public function destroy($id){

        Receita::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Receita excluída com sucesso!');

    }
}


