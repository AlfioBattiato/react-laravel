<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class product extends Model
{
    use HasFactory;

    // public function carts(): HasMany
    // {
    //     return $this->hasMany(cart::class);
        
    // }
    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(cart::class)->withPivot('quantity');
    }
}
