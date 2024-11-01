<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class FrameworkUnit extends Model
{
    /** @use HasFactory<\Database\Factories\FrameworkUnitFactory> */
    use HasFactory, HasUuids;

    protected $with = ['framework'];

    public function framework(): BelongsTo
    {
        return $this->belongsTo(Framework::class);
    }

    public function ownable(): MorphTo
    {
        return $this->morphTo();
    }
}
