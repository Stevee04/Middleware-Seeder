<!-- resources/views/pokemons/index.blade.php -->

@extends('layouts.app')

<!-- resources/views/pokemons/index.blade.php -->

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

    <div class="container">
        <!-- Formulario de inicio de sesión -->
        <h2>Iniciar Sesión</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
@endsection

