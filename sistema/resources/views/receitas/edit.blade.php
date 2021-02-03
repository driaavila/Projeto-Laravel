@extends('layouts.main')

@section('title', 'Editando: ' . $receitas->title)

@section('content')

<div id="receitas-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $receitas->title }} </h1>
    <form action="/receitas/update/{{ $receitas->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="image">Imagem da Receita:</label>
            <input type="file" id="image" name="image" class="form-control-file">            
            <img src="/img/receitas/{{ $receitas->image }}" alt="{{ $receitas->title }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Receita:</label>
            <input type="text" class="form-control" id="title" name="title" palceholder="Nome da Receita" value="{{ $receitas->title }}">
        </div>
        <div class="form-group">
            <label for="title">Ingredientes:</label>
            <textarea name="ingredients" id="ingredients" class="form-control" placeholder="Insira os ingredientes necessários para essa receita">{{ $receitas->ingredients }}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Modo de preparo:</label>
            <textarea name="preparation" id="preparation" class="form-control" placeholder="Modo de preparo da receita">{{ $receitas->preparation }} </textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Receita">
    </form>
</div>

@endsection