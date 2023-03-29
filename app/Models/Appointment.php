<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_details_id',
        'date_of_birth',
        'disease_type',
        'appointment_date',
        'massage',
    ];

    public function awardAndDistinction(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DoctorAcademicAwardAndDistinction::class,'doctor_details_id','id');
    }

//    public function doctorName(): \Illuminate\Database\Eloquent\Relations\HasOne
//    {
//        return $this->hasOne(DoctorDetail::class,'name','name');
//    }
}
