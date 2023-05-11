<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stat;

class Team extends Model
{
    use HasFactory;
//    use SoftDeletes;
    protected $table = 'teams';
    protected $guarded = [];

    public function stat()
    {
        return $this->hasOne(Stat::class, 'namber', 'namber' );
    }

}
