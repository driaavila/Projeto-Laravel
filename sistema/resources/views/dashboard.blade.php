@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas Receitas</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-receitas-container">
    @if(count((array)$receitas) > 0 )
    @else
    <p>Você ainda não possui receitas cadastradas, <a href="/receitas/create">criar receita</a></p>
    @endif
</div>

@endsection