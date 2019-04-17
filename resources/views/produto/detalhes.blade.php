@extends('layout/principal')

@section('conteudo')
<h1>Detalhes de produto: {{ $produto->nome }}</h1>

<ul>
    <li>
        <b>Valor:</b> R$ {{ $produto->valor }} 
    </li>
    <li>
        <b>Descrição:</b> {{ $produto->descricao }} 
    </li>
    <li>
        <b>Quantidade:</b> {{ $produto->quantidade }} 
    </li>
</ul>

@stop