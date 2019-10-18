<?php

namespace App;

use App\Game;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $guarded = [];

    public function games()
    {
        return $this->hasMany(Game::class, 'publisher_id', 'id');
    }
}
