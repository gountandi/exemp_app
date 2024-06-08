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
        Schema::create('template', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('libelle');
            $table->string('contenu');
            $table->integer('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('ticket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template');
    }
};
