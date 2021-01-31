@extends('layouts.main')

@section('title', 'Livre na Cozinha')

@section('content')
    @foreach ($receitas as $receitas)
    <p>{{ $receitas->title }}</p>
    @endforeach

@endsection
