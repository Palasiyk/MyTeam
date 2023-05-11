<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;
//    use SoftDeletes;
//    protected $table = 'stats';
    protected $guarded = [];

    public function player()
    {
        return $this->belongsTo(Team::class, 'image', 'image' );
    }
}
