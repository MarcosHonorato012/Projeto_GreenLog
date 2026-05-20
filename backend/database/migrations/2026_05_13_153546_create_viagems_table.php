<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('viagems', function (Blueprint $table) {

            $table->id();

            $table->foreignId('userr_id')
                ->constrained('userrs')
                ->onDelete('cascade');

            $table->foreignId('veiculo_id')
                ->constrained('veiculos')
                ->onDelete('cascade');

            $table->string('nova_viagem');

            $table->string('lista_viagem');

            $table->timestamp('data_criacao')
                ->useCurrent();

            $table->integer('distancia_km');

            $table->string('partida');

            $table->string('destino');

            $table->text('observacao')
                ->nullable();

            $table->string('conclusao');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('viagems');
    }
};
