@extends('layouts.app')
@section('content')
<form action="{{route('carros.update', ['carro' => $carro->id])}}" method="POST">
@csrf
@method("PUT")

    <div class="form-group col-md-6">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" class="form-control" value="{{$carro->marca}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" class="form-control" value="{{$carro->modelo}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="cor">Cor:</label>
        <input type="text" name="cor" id="cor" class="form-control" value="{{$carro->cor}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="ano">Ano:</label>
        <input type="text" name="ano" id="ano" class="form-control" value="{{$carro->ano}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="placa">Placa:</label>
        <input type="text" name="placa" id="placa" class="form-control" value="{{$carro->placa}}">
    </div>
    <br>
    
    <button class="btn btn-lg btn-success">Atualizar Veículo</button>

</form>
<hr>
<a href="{{route('carros.index')}}" class="btn btn-primary float-left">Voltar</a>
@endsection
