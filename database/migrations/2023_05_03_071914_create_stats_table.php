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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('namber');
            $table->foreign('namber')->references('namber')
                ->on('teams')->onDelete('cascade');

            $table->string('image')->nullable();
            $table->string('PlayerName')->unique();
            $table->integer('PlayedSet')->nullable();

            $table->integer('TotPoint')->nullable();

            $table->integer('TotServ')->nullable();
            $table->integer('AceServ')->nullable();
            $table->integer('ErrServ')->nullable();

            $table->integer('TotRes')->nullable();
            $table->integer('ErrRes')->nullable();
            $table->integer('NegRes')->nullable();
            $table->integer('ExcRes')->nullable();

            $table->integer('TotAtac')->nullable();
            $table->integer('ErrAtac')->nullable();
            $table->integer('BlkAtec')->nullable();
            $table->integer('ExcAtec')->nullable();

            $table->integer('Block')->nullable();

            $table->string('More')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
