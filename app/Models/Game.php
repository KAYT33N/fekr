<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    CONST RESULT_PENDING = 0;
    CONST RESULT_WON = 1;
    CONST RESULT_LOST = 2;

    protected $fillable = [
        'colors',
        'result',
    ];

    public function moves(){
        return $this->hasMany(Move::class);
    }
}
