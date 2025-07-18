<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    /** @use HasFactory<\Database\Factories\AgentFactory> */
    use HasFactory;

    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    protected $attributes = [
        'name' => 'AI Agent',
        'isActive' => false,
    ];
}
