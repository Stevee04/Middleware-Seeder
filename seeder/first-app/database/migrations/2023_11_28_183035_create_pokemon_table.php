<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pokemon', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('tipo');
        $table->enum('tamano', ['grande', 'mediano', 'pequeno']);
        $table->decimal('peso', 5, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
