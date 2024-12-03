<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobposts_data extends Model
{
    //
    protected $fillable = [
        "position",
        "role",
        "description"
    ];
}
