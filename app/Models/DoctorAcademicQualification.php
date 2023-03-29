<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAcademicQualification extends Model
{
    use HasFactory;

    protected $fillable =[
        'doctor_details_id',
        'institution_name',
        'degree_name',
        'degree_from',
        'degree_to',
        'degree_status'
    ];

}
