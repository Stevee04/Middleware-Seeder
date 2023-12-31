<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //inserta 10 tareas
        for($i =0; $i<=10; $i++)
        {
            DB::table('Tasks')->insert([
                'id' => '0',
                'nombre' => Str::random(10),
                'descripcion' => Str::random(200),
            ]);
        }
    }
}
