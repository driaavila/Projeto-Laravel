@extends('layouts.main')

@section('title', 'Cadastrar Receita')

@section('content')

<div id="receitas-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre sua Receita</h1>
    <form action="/receitas" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="image">Imagem da Receita:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Receita:</label>
            <input type="text" class="form-control" id="title" name="title" palceholder="Nome da REceita">
        </div>
        <div class="form-group">
            <label for="title">Ingredientes:</label>
            <textarea name="ingredients" id="ingredients" class="form-control" placeholder="Insira os ingredientes necessários para essa receita"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Modo de preparo:</label>
            <textarea name="preparation" id="preparation" class="form-control" placeholder="Modo de preparo da receita"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Receita">
    </form>
</div>

@endsection