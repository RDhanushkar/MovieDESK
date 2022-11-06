<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = [
        'vote_count',
        'id',
        'video',
        'vote_average',
        'title',
        'popularity',
        'poster_path',
        'original_language',
        'original_title',
        'genre_ids',
        'adult',
        'overview',
        'release_date',
    ];
    protected $casts = [
        'genre_ids' => 'array'
    ];
}
