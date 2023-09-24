@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Animais</h1>
@stop


@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<a href="{{ route('animals.create') }}"><button type="button" class="btn btn-primary but-add buttons" data-modal="modal-add" title="Adicionar animal"
            id="botaoAddAnimal"><i class="bi bi-plus"></i></button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Espécie</th>
      <th scope="col">Dono</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($animals as $animal)
    <tr>
    
      <td>{{ $animal -> id }}</td>
        
      <td>{{ $animal -> name }}</td>
      
      <td>{{ $animal -> species }}</td>
      
      <td>oi</td>
      
      <td> <a href="{{ route('animals.show', $animal->id) }}"><button type="button" class="btn btn-secondary buttons" data-modal="modal-visualizar"
                                    title="Visualizar Animal"><i class="bi bi-eye"></i></button></a>
                                <button type="button" class="btn btn-success buttons" data-modal="modal-editar"
                                    title="Editar Animal"><i class="bi bi-pencil-fill"></i></button>
                                <button type="button" class="btn btn-danger buttons" data-modal="modal-excluir"
                                    title="Excluir Animal"><i class="bi bi-x-lg"></i></button> </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop