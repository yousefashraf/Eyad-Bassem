<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coach extends Model
{
    protected $fillable = [
        'name',
        'title',
        'bio',
        'image_url',
        'expertise',
        'certifications',
        'clients_transformed',
        'coaching_type',
        'customizable_percentage',
    ];

    protected $casts = [
        'expertise' => 'json',
        'certifications' => 'json',
    ];

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}
