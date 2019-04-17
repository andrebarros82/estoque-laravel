@extends('layout/principal')

@section('conteudo')

@if(empty($produtos))

<div class="alert alert-danger" role="alert">Sem produtos cadastrados</div>

@else

<h1>Produtos</h1>
<table class="table table-striped">
    @foreach ($produtos as $produto)
    <tr class="{{ $produto->quantidade <= 1 ? 'danger' : ''}}">
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->valor }}</td>
        <td>{{ $produto->descricao }}</td>
        <td>{{ $produto->quantidade }}</td>    
        <td><a href="/produtos/mostra/{{ $produto->id }}"><span class="glyphicon glyphicon-search"></span></a></td>
    </tr>
    @endforeach
</table>
@endif

<h4>
    <span class="label label-danger pull-right m-1">
        Um ou menos itens no estoque
    </span>

    @if(old('nome'))
    <span class="label label-success pull-right m-1">
        <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
    </span>
</h4>
@endif
@stop
