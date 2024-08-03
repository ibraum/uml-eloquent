<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnimalEvent extends Model
{
    use HasFactory;
    public function animal () : BelongsTo
    {
        return $this->belongsTo(Animal::class, 'animal_event_id', 'animal_id');
    }
}
