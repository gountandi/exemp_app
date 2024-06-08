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
        Schema::create('lignecommande', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantiter');
            $table->integer('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('ticket');
            $table->integer('cmd_id');
            $table->foreign('cmd_id')->references('id')->on('commande');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignecommande');
    }
};
