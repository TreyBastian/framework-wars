<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationSnapshot extends Model
{
    /** @use HasFactory<\Database\Factories\LocationSnapshotFactory> */
    use HasFactory, HasUuids;

    protected $with = ['location', 'frameworkLocationSnapshot'];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function frameworkLocationSnapshot(): HasMany
    {
        return $this->hasMany(FrameworkLocationSnapshot::class);
    }
}
