<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    use HasFactory;
    protected $primaryKey = 'food_id';

    public function animals() : BelongsToMany
    {
        return $this->belongsToMany(Animal::class, 'animals', 'animal_id', 'food_id','animal_id', 'food_id');
    }
}
