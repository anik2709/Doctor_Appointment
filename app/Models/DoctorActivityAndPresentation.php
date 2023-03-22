<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorActivityAndPresentation extends Model
{
    use HasFactory;

    protected $fillable=[
        'doctor_details_id',
        'research_name',
        'research_from',
        'research_to',
    ];
    public function doctor_details(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(DoctorDetail::class,'doctor_details_id');
    }
}
