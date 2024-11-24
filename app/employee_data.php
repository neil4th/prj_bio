<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_data extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'employment_date',
        'employment_status',
        'position',
        'department',
        'supervisor',
        'manager'
    ];
}
