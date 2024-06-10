

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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('libelle');
            $table->integer('prix');
            $table->integer('nbre_place');
            $table->string('type');
            $table->integer('event_id');
            $table->foreign('event_id')->references('id')->on('evenements');
            $table->integer('template_id');
            $table->foreign('template_id')->references('id')->on('templates');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
