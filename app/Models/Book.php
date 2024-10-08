<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = [
        'id',
        'title',
        'author',
    ];

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    use HasFactory;
}
