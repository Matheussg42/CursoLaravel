@extends('layout.app')

@section('titulo', 'Minha página - Filho')

@section('barralateral')
    @parent
    <p>Essa parte é do FILHO</p>
@endsection

@section('conteudo')
    <p>Este é o conteúdo do filho</p>
@endsection