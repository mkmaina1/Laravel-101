<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infinitenetworks extends Model
{
    protected $fillable = ['name', 'location', 'bio'];

    /** @use HasFactory<\Database\Factories\InfinitenetworksFactory> */
    use HasFactory;
}
