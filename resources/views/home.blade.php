@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Sistema de Cadastro, Vizualização, Edição e Exclusão de Veículos</h3>
    <p class="font-weight-light">CRUD simples</p><br>

    <div class="row justify-content-center">
    <img src="https://i.pinimg.com/originals/03/6b/be/036bbe4ae4bb0651f7ec4bce9a3c1a1e.jpg" class="img-fluid" alt="Imagem Responsiva">
    </div><br>

    <div class="row justify-content-center">
        <a href="{{route('carros.index')}}" class="btn btn-success form-control">Listagem de Veículos</a>              
    </div>
</div>
@endsection
