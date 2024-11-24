<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person_data extends Model
{
    use HasFactory;
    protected $fillable = [
        "firstname",
        "middlename",
        "lastname",
        "name_ext",
        "dateofbirth",
        "sex",
        "address",
        "contact_number",
        "email",
        "civil_status",
        "citizenship",
        "height",
        "weight",
        "religion",
        "spouse",
        "spouse_occupation",
        "name_of_children",
        "father",
        "father_occupation",
        "mother",
        "mother_occupation",
        "language_dialect",
        "contact_person_name",
        "contact_person_number"
    ];
}
