<!-- resources/views/pokemons/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Pokémon</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $pokemon->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="Fuego" {{ $pokemon->tipo === 'Fuego' ? 'selected' : '' }}>Fuego</option>
                    <option value="Agua" {{ $pokemon->tipo === 'Agua' ? 'selected' : '' }}>Agua</option>
                    <option value="Planta" {{ $pokemon->tipo === 'Planta' ? 'selected' : '' }}>Planta</option>
                    <!-- Agrega más opciones según los tipos de Pokémon que necesites -->
                </select>
            </div>
            <div class="form-group">
                <label for="tamano">Tamaño:</label>
                <select class="form-control" id="tamano" name="tamano" required>
                    <option value="grande" {{ $pokemon->tamano === 'grande' ? 'selected' : '' }}>Grande</option>
                    <option value="mediano" {{ $pokemon->tamano === 'mediano' ? 'selected' : '' }}>Mediano</option>
                    <option value="pequeno" {{ $pokemon->tamano === 'pequeno' ? 'selected' : '' }}>Pequeño</option>
                </select>
            </div>
            <div class="form-group">
                <label for="peso">Peso:</label>
                <input type="number" step="0.01" class="form-control" id="peso" name="peso" value="{{ $pokemon->peso }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Pokémon</button>
        </form>
    </div>
@endsection
