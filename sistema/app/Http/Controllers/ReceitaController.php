<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;

class ReceitaController extends Controller
{
    public function index(){
        $receitas = Receita::all();
        return view('welcome', ['receitas' => $receitas]);
    }

    public function create(){
        return view('receitas.create');
    }
}
