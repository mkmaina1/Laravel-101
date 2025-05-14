<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infinite extends Model
{
    protected $fillable=['name','location','bio', 'dojo_id'];

    /** @use HasFactory<\Database\Factories\InfiniteFactory> */
    use HasFactory;

    public function dojo(){
        return $this->belongsTo(Dojo::class);
    }
}
