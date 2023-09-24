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
                <input disabled name="name" type="text" class="form-control" id="name" required value="{{ old('name', $animal->name) }}">
            </div>
            <div class="mb-3">
                <label for="species">Espécie</label>
                <input disabled name="species" type="text" class="form-control" id="species" required value="{{ old('species', $animal->species) }}">
            </div>
            <div class="mb-3">
                <label for="breed">Raça</label>
                <input disabled name="breed" type="text" class="form-control" id="breed" required value="{{ old('breed', $animal->breed) }}">
            </div>
            <div class="mb-3">
                <label for="owner">Proprietário</label>
                <input disabled name="owner" type="text" class="form-control" id="owner" required value="{{ old('owner', $animal->owner->name) }}">
            </div>
        <div class="form-group">
            <label for="birth_date">Data de nascimento</label>
            <input disabled name="birth_date" type="date" class="form-control" id="birthdate">
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
@stop