<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProcessStep extends Model
{
    protected $fillable = [
        'program_id',
        'step_number',
        'title',
        'description',
        'order',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
