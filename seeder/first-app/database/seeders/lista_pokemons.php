<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str
use Carbon\Carbon;

class lista_pokemons extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {


        for($i =0; $i<=10; $i++)
        {
        // Genera un número entero aleatorio entre 1 y 200
        $pesoAleatorio = mt_rand(1, 200);

        // Opciones para el tipo de pokemon
        $tipos = ["Fuego", "Agua", "Planta"];
        $tamaño = ["Pequeño", "Mediano", "Grande"];

        // Selecciona un tipo aleatorio
        $tipoAleatorio = $tipos[array_rand($tipos)];
        $tamañoAleatorio = $tamaño[array_rand($tamaño)];


        $fechaActual = Carbon::now();

            DB::table('pokemon')->insert([
                'id' => '0',
                'nombre' =>  Str::random(10),
                'tipo' => $tipoAleatorio,
                'tamano' => $tamañoAleatorio,
                'peso' => $pesoAleatorio,
                'created_at' => $fechaActual,
                'updated_at' => $fechaActual,
            ]);
        }
    }
}

?>