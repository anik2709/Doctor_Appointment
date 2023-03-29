<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\DoctorDetail;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AppointmentController extends Controller
{
    public function appointment($id)
    {
        $user = User::find($id);
        $doctorId = DoctorDetail::find($id);
        return view('frontend.doctor_details', compact('doctorId'));
    }


    public function create(Request $request)
    {
//        dd($request->all());
        $appointmentPost = Appointment::create([
            'user_id'=>$request->get('user_id'),
            'doctor_details_id' => $request->get('doctor_details_id'),
            'date_of_birth' => $request->get('date_of_birth'),
            'disease_type' => $request->get('disease_type'),
            'appointment_date' => $request->get('appointment_date'),
            'massage'=>$request->get('massage'),
        ]);
//        @dd($appointmentPost);



        if ($appointmentPost){
            return  Redirect::back()->with('success', 'Your Appointment Placed Successfully');

//            return view('frontend.doctor_details')->with('post', 'Your Appointment Placed Successfully');
        }else{
            return  Redirect::back();
        }



//        $appointmentPost = Appointment::with(['user_id','doctor_details_id'])->first();

//        return view('frontend.doctor_details', compact('appointmentPost'));
    }
}
