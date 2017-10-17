<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function score(){ // Verbindung zu Score
		return $this->hasMany(Score::class);
	}
}
