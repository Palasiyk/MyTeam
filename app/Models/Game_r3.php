<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_r3 extends Model
{
    use HasFactory;

    public function game()
    {
        return $this->hasOne(Oponent::class, 'game_r3_id', 'id' );
    }
}
