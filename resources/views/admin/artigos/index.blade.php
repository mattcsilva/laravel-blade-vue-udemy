@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <tabela-lista 
            v-bind:titulos="['#', 'Título', 'Curso']"
            v-bind:itens="[[1, 'PHP 00', 'Curso de PHP 00'],[2, 'Vue JS', 'Curso de Vue JS']]"
            ordem="DESC" ordemcol="1"
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="666666666"
            
            ></tabela-lista>

        </painel>
    </pagina>
@endsection
