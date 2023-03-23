<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AppointmentController extends Controller
{
    public function appointment()
    {

        $appointments =  Appointment::all();
//        return $doctors;
        return view('frontend.doctor_details', compact('appointments'));
    }


    public function appointment_post()
    {

        $appointmentPost = Appointment::with(['user_id','doctor_details_id'])->first();

        return view('frontend.doctor_details', compact('appointmentPost'));
    }
}
