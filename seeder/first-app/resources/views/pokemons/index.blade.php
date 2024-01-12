<!-- resources/views/pokemons/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Pokémon</h2>
        <a href="{{ route('pokemons.create') }}" class="btn btn-primary mb-2">Agregar Pokémon</a>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Tamaño</th>
                    <th>Peso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pokemons as $pokemon)
                    <tr>
                        <td>{{ $pokemon->id }}</td>
                        <td>{{ $pokemon->nombre }}</td>
                        <td>{{ $pokemon->tipo }}</td>
                        <td>{{ $pokemon->tamano }}</td>
                        <td>{{ $pokemon->peso }}</td>
                        <td>
                            <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este Pokémon?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
