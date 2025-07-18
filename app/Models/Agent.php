<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    /** @use HasFactory<\Database\Factories\AgentFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $attributes = [
        'name' => 'AI Agent',
        'isActive' => false,
    ];

    function website(): HasMany {
        return $this->hasMany(Website::class);
    }
}
