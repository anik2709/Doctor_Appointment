<?php

namespace App\Models;

use App\Http\Controllers\DoctorActivityPresentationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'website',
        'description',
        'image'
    ];
    public function awardAndDistinction(){
        return $this->hasMany(DoctorAcademicAwardAndDistinction::class,'doctor_details_id','id');
    }

    public function academicQualification(){
        return $this->hasMany(DoctorAcademicQualification::class,'doctor_details_id','id');
    }

    public function activityPresentation(){
        return $this->hasMany(DoctorActivityAndPresentation::class,'doctor_details_id','id');
    }
}
