@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas Receitas</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-receitas-container">
    @if(count((array)$receitas) > 0 )
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($receitas as $receitas)
            <tr>
                <td scropt="row">{{ $loop->index +1 }}</td>
                <td><a href="/receitas/{{ $receitas->id }}">{{ $receitas->title }}</a></td>
                <td>
                    <a href="/receitas/edit/{{ $receitas->id }}" class="btn btn-info edit-btn"><ion-icon name ="create-outline"></ion-icon>
                    Editar
                    </a> 
                    <form action="/receitas/{{ $receitas->id }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> 
                    Deletar
                    </button>
                
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não possui receitas cadastradas, <a href="/receitas/create">criar receita</a></p>
    @endif
</div>

@endsection