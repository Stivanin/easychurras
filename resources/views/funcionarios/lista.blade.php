@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Funcionários
                    <a class="pull-right" href="{{url('funcionarios/novo') }}"> Novo Funcionário</a>
                </div>
                
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success"> {{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                    Listagem de funcionários
                    <table class="table table-striped">
                        <th> Contrato </th>
                        <th> Nome </th>
                        <th> Ações </th>
                        <tbody>
                            @foreach($funcionarios as $funcionario)
                            <tr>
                                <td>{{$funcionario->contrato}}</td>
                                <td>{{$funcionario->nome}}</td>
                                <td>
                                    <a href="funcionarios/{{$funcionario->id}}/visualizar" class="btn btn-default btn-sm"> Visualizar</a>
                                    <a href="funcionarios/{{$funcionario->id}}/editar" class="btn btn-default btn-sm"> Editar</a>
                                    {!!Form::open(['method' => 'DELETE', 'url' => '/funcionarios/'.$funcionario->id, 'style' => 'display: inline;'])!!}
                                    <button type="submit" class="btn btn-default btn-sm"> Excluir</button>
                                    {!! Form::close() !!}
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection