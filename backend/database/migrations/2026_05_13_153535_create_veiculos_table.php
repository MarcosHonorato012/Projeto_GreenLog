<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {

            $table->id();

            $table->string('novo_veiculo');

            $table->string('modelo');

            $table->string('marca');

            $table->string('placa');

            $table->integer('ano');

            $table->string('estado');

            $table->string('observacao');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
