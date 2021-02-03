@extends('layouts.main')

@section('title', 'Livre na Cozinha')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque uma receita</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="receitas-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{ $search }} </h2>
        @else
        <h2>Outras Receitas</h2>
        <p class="subtitle">Receitas em destaque </p>
        @endif      

        <div id="cards-container" class="row">

            @foreach($receita as $receita)
            <div class="card col-md-3">
                <img src="/img/receitas/{{ $receita->image }}" alt="{{ $receita->title }}" > 
                <div class="card-body">
                    <h5 class="card-title">{{ $receita->title }}</h5> 
                    <a href="/receitas/{{ $receita->id }}" class="btn btn-primary">Saber mais</a>
                </div>

            </div>

            @endforeach
        </div>
    </div>
@endsection

