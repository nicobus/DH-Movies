<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $guarded = [];
    
    public function genre()
    {
        return $this->belongsTo('App\Genre', 'genre_id');
    }
    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'actor_movie', 'movie_id', 'actor_id');
    }
    public function getReleaseDateAttribute($value) {
        return Carbon::parse($value)->locale('es_Es')->isoFormat('d [de] MMMM [de] YYYY');
    }
    
}
