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
            
        </div>
    </div>

</div>

@endsection