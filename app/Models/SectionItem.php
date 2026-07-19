<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SectionItem extends Model
{
    protected $fillable = [
        'page_section_id',
        'title',
        'description',
        'content',
        'image_url',
        'link',
        'order',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'json',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
