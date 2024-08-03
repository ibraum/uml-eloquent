<?php

use App\Models\Animal;
use App\Models\Vet;
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
        Schema::create('animal_vets', function (Blueprint $table) {
            $table->unsignedBigInteger('vet_id');
            $table->unsignedBigInteger('animal_id');
            $table->string('type');
            $table->date('treatment_date');
            $table->primary(['vet_id', 'animal_id']);
            $table->timestamps();

            $table->foreign('vet_id')->on('vets')->references('vet_id');
            $table->foreign('animal_id')->on('animals')->references('animal_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_vets');
    }
};
