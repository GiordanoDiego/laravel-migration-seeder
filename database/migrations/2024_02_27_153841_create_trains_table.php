<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();//questo crea la primary key unsigned not null ...

            $table->string('codice', 7);
			$table->string('azienda', 64); //64 sta per la lunghezza della stringa
			$table->string('stazione_partenza', 64);
			$table->string('stazione_arrivo', 64);
            $table->date('data');
            $table->time('orario_partemza');
            $table->time('orario_arrivo');
            $table->smallInteger('num_carrozze')->nullable()->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
