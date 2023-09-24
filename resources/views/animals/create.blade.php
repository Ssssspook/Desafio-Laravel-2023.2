@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Adicionar Animal</h1>
@stop

@section('content')

    <form action="{{ route('animals.store') }}" method="post">
        @csrf
            <div class="mb-3">
                <label for="name">Nome</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Insira o nome">
            </div>
            <div class="mb-3">
                <label for="species">Espécie</label>
                <input name="species" type="text" class="form-control" id="species" placeholder="Insira a espécie">
            </div>
            <div class="mb-3">
                <label for="breed">Raça</label>
                <input name="breed" type="text" class="form-control" id="breed" placeholder="Insira a raça">
            </div>
        <div class="mb-3">
            <label for="owner_id">Proprietário:</label>
            <select class="form-control form-select form-select-sm" name="owner_id" id="owner_id">
                
            </select>
        </div>
        <div class="form-group">
            <label for="birth_date">Data de nascimento</label>
            <input name="birth_date" type="date" class="form-control" id="birthdate">
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
@stop