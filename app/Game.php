<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'gamesheros';
    protected $fillable = [
        "character",
        "real_name"
    ];
}