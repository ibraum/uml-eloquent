<?php

use App\Models\Animal;
use App\Models\Food;
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
        Schema::create('animal_food', function (Blueprint $table) {
            $table->date('date_eating');
            $table->double('quantity');
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('food_id');
            $table->primary(['animal_id', 'food_id']);
            $table->timestamps();

            $table->foreign('animal_id')->on('animals')->references('animal_id');
            $table->foreign('food_id')->on('food')->references('food_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_food');
    }
};
