<!-- resources/views/pokemons/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Agregar Pokémon</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pokemons.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="Fuego">Fuego</option>
                    <option value="Agua">Agua</option>
                    <option value="Planta">Planta</option>
                    <!-- Agrega más opciones según los tipos de Pokémon que necesites -->
                </select>
            </div>
            <div class="form-group">
                <label for="tamano">Tamaño:</label>
                <select class="form-control" id="tamano" name="tamano" required>
                    <option value="grande">Grande</option>
                    <option value="mediano">Mediano</option>
                    <option value="pequeno">Pequeño</option>
                </select>
            </div>
            <div class="form-group">
                <label for="peso">Peso:</label>
                <input type="number" step="0.01" class="form-control" id="peso" name="peso" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Pokémon</button>
        </form>
    </div>
@endsection
