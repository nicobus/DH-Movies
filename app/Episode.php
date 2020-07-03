<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $guarded = [];

    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'actor_episode', 'episode_id', 'actor_id');
    }
}
