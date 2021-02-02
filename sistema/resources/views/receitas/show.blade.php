@extends('layouts.main')

@section('title', $receita->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/receitas/{{ $receita->image }}" class="img-fluid" alt="{{ $receita->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1> {{ $receita->title}} </h1>
            <h4> Ingredientes: </h4>
            <p> {{ $receita->ingredients}} </p>
            <hr>
            <h4> Modo de preparo: </h4>
           <p> {{ $receita->preparation}} </p>
            <h5 class="receita-owner"><ion-icon name="star-outline"></ion-icon> {{ $receitasOwner['name'] }} </h5>
        </div>
        

    </div>

</div>

@endsection