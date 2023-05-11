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
        Schema::create('oponents', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('team_logo');
            $table->string('team_foto');
            $table->unsignedBigInteger('game_playoff_id');
            $table->unsignedBigInteger('game_kup_id');
            $table->unsignedBigInteger('game_r3_id');
            $table->unsignedBigInteger('game_r2_id');
            $table->unsignedBigInteger('game_r1_id');
            $table->timestamps();

            $table->foreign('game_playoff_id')->references('id')
                ->on('game_playoffs')->onDelete('cascade');

            $table->foreign('game_kup_id')->references('id')
                ->on('game_kups')->onDelete('cascade');

            $table->foreign('game_r3_id')->references('id')
                ->on('game_r3s')->onDelete('cascade');

            $table->foreign('game_r2_id')->references('id')
                ->on('game_r2s')->onDelete('cascade');

            $table->foreign('game_r1_id')->references('id')
                ->on('game_r1s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oponents');
    }
};
