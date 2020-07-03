<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Actor extends Model
{
    public $guarded = [];
    
    public function movies()
    {
        return $this->belongsToMany('App\Movie', 'actor_movie', 'actor_id', 'movie_id');
    }

    public function favoriteMovies()
    {
        return $this->hasMany('App\Movie', 'id', 'favorite_movie_id');
    }

    public function episodes()
    {
        return $this->belongsToMany('App\Episode', 'actor_episode', 'actor_id', 'episode_id');
    }
    public function getFullName(){
        return $this->first_name . " " . $this->last_name;
    }
}