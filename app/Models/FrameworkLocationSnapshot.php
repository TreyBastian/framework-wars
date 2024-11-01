<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FrameworkLocationSnapshot extends Pivot
{
    protected $with = ['framework'];

    public function framework(): BelongsTo
    {
        return $this->belongsTo(Framework::class);
    }
}
