<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DoctorDetail;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_name'
    ];

    public function doctor(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DoctorDetail::class,'category_name',);
    }
}
