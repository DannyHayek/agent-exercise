<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Website extends Model
{
    /** @use HasFactory<\Database\Factories\WebsiteFactory> */
    use HasFactory;

    protected $guarded = ['id'];

}
