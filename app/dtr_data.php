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
        'time_in_morning',
        'time_out_morning',
        'time_in_afternoon',
        'time_out_afternoon',
        'undertime_morning',
        'undertime_afternoon',
    ];
}
