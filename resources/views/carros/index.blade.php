@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <a href="{{route('carros.create')}}" class="btn btn-success float-right">Cadastrar Veículos</a>
        <a href="{{route('home')}}" class="btn btn-primary float-right">Voltar</a>
    
        <h3>Listagem de Veículos</h3>
        <div class="clearfix"></div>
    </div>
</div>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor:</th>
            <th>Ano:</th>
            <th>Placa:</th>
            <th>Criado em:</th>
            <th>Status:</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($carros as $carro)
        <tr>
            <td>{{$carro->id}}</td>
            <td>{{$carro->marca}}</td>
            <td>{{$carro->modelo}}</td>
            <td>{{$carro->cor}}</td>
            <td>{{$carro->ano}}</td>
            <td>{{$carro->placa}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($carro->created_at))}}</td>
            @if($carro->status)
                <td class="badge badge-success">Ativo</td>
            @else
                <td class="badge badge-danger">Desativado</td>
            @endif
            
            <td>
                <div class="btn-group">
                <a href="{{route('carros.edit', ['carro' => $carro->id])}}" class="btn btn-sm btn-primary">Editar</a> 
                <form action="{{route('carros.destroy', ['carro' => $carro->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>    
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9" >Nenhum registro encontrado</td>
        </tr>
        @endforelse
    </tbody>
</table>
{{$carros->links()}}
@endsection


