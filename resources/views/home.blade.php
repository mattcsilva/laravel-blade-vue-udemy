@extends('layouts.app')

@section('content')
    <template>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <painel titulo="Dashboard">
                        Teste de conteúdo...
                    
                        <div class="row">
                            <div class="col-md-4">
                                <painel titulo="Conteúdo 1" cor="panel-success">
                                    Teste de conteúdo...
                                </painel>
                            </div>
                            <div class="col-md-4">
                                <painel titulo="Conteúdo 2" cor="panel-warning">
                                    Teste de conteúdo...
                                </painel>
                            </div>
                            <div class="col-md-4">
                                <painel titulo="Conteúdo 3" cor="panel-info">
                                    Teste de conteúdo...
                                </painel>
                            </div>
                        </div>

                    </painel>
                </div>
            </div>
        </div>
    </template>
@endsection
