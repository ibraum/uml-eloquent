<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{
    use HasFactory;
    public function foods() : BelongsToMany
    {
        return $this->belongsToMany(Food::class, 'food', 'food_id', 'animal_id','food_id', 'animal_id');
    }

    public function animalEvents() : HasMany
    {
        return $this->hasMany(AnimalEvent::class, 'animal_event_id', 'animal_id');
    }
}
