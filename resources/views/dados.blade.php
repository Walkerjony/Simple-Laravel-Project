@extends('layout')
    @section('titulo')
    Usuários
    @endsection
    @section ('content')
    <table class="table table-bordered">
  <thead class = "table-dark">
    <tr>
      <th scope="col">Usuário</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>

    </tr>
  </thead>
  <tbody>
    @foreach($cadastro as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->cpf}}</td>

    </tr>
    <tr>
    </tr>
    @endforeach
  </tbody>
</table>
    @endsection