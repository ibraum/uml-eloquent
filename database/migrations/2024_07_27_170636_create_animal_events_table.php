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
        Schema::create('animal_events', function (Blueprint $table) {
            $table->id('animal_event_id');
            $table->unsignedBigInteger('animal_id');
            $table->string('type');
            $table->dateTime('dateEvent');
            $table->timestamps();

            $table->foreign('animal_id')->on('animals')->references('animal_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_events');
    }
};
