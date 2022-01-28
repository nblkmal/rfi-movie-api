<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Theater;
use App\Models\Language;
use App\Models\Performer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'mpaa_rating',
        'time_start',
        'time_end',
        'd_date',
        'r_date',
        'genre_id',
        'theater_id',
        'language_id',
        'release',
        'length',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function theater()
    {
        return $this->belongsTo(Theater::class, 'theater_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function performers()
    {
        return $this->belongsToMany(Performer::class, 'movie_performers');
    }
}
