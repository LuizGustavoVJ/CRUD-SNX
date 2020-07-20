@extends('layouts.app')
@section('content')
<form action="{{route('carros.store')}}" method="post">
@csrf

    <div class="form-group col-md-6">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" class="form-control" value="{{old('marca')}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" class="form-control" value="{{old('modelo')}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="cor">Cor:</label>
        <input type="text" name="cor" id="cor" class="form-control" value="{{old('cor')}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="ano">Ano:</label>
        <input type="text" name="ano" id="ano" class="form-control" value="{{old('ano')}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="placa">Placa:</label>
        <input type="text" name="placa" id="placa" class="form-control" value="{{old('placa')}}">
    </div>
    <br>

    <button class="btn btn-lg btn-success">Cadastrar Veículo</button>

</form>

@endsection
