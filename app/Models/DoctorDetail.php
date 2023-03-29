<?php

namespace App\Models;

use App\Http\Controllers\DoctorActivityPresentationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class DoctorDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'website',
        'description',
        'image',
        'category_name'
    ];
    public function awardAndDistinction(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DoctorAcademicAwardAndDistinction::class,'doctor_details_id','id');
    }

    public function academicQualification(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DoctorAcademicQualification::class,'doctor_details_id','id');
    }

    public function activityPresentation(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DoctorActivityAndPresentation::class,'doctor_details_id','id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_name');
    }

//    public function appointmentPost(): \Illuminate\Database\Eloquent\Relations\HasMany
//    {
//        return $this->hasMany(Appointment::class,'doctor_details_id','id');
//    }
}
