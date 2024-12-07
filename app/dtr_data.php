<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dtr_data extends Model
{
    use HasFactory;
    protected $fillable = [
        "emp_id",
        "day",
        "time",
        "type"
    ];
}
