<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oponent extends Model
{
    use HasFactory;
    protected $table = 'oponents';

    public function game()
    {
        return $this->hasOne(Game_kup::class);
    }
}
