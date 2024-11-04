<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Framework extends Model
{
    /** @use HasFactory<\Database\Factories\FrameworkFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'url',
        'logo'
    ];

    public function units(): HasMany
    {
        return $this->hasMany(FrameworkUnit::class);
    }
}
