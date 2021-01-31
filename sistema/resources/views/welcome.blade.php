@extends('layouts.main')

@section('title', 'Livre na Cozinha')

@section('content')
    @foreach ($receitas as $receitas)
    <p>{{ $receitas->title }}</p>
    @endforeach

    <div id="search-container" class="col-md-12">
        <h1>Busque uma receita</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="receitas-container" class="col-md-3">
        <h2>Outras Receitas</h2>
        <p class="subtitle">Receitas em destaque </p>
        <div id="cards-container" class="row">
            @foreach($receitas as $receitas)
            <div class="card-col-md-3">
                <img src="/img/fazerreceita.jpg" width='200px'> 
                <div class="card-body">
                    <h5 class="card-title"></h5> 
                    <p class="card-porcao">X porções</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

@endsection
