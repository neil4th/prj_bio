<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    
 // Disable automatic timestamps handling if your table does not have `created_at` and `updated_at` columns
 public $timestamps = false;
    // Specify the table name if it's not the default "positions"
    protected $table = 'position';

    // Allow mass assignment on these columns
    protected $fillable = ['position', 'role'];

}
