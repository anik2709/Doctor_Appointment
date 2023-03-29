<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAcademicAwardAndDistinction extends Model
{
    use HasFactory;

    protected $fillable=[
        'doctor_details_id',
        'award_name',
        'award_date',
    ];

}
