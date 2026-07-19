<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    protected $fillable = [
        'coach_id',
        'name',
        'slug',
        'description',
        'phases',
        'duration_weeks',
        'order',
    ];

    protected $casts = [
        'phases' => 'json',
    ];

    public function coach(): BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(ProcessStep::class);
    }

    public function methods(): HasMany
    {
        return $this->hasMany(CoachingMethod::class);
    }
}
