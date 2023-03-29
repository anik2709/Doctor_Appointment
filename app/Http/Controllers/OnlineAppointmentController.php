<?php

namespace App\Http\Controllers;

use App\Http\Controllers\frontend\AppointmentController;
use App\Models\Appointment;
use App\Models\DoctorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OnlineAppointmentController extends Controller
{
    public function online_appointment_list()
    {
        $online_appointment_list = Appointment::latest()->paginate(6);
//        $online_appointment_list=Appointment::latest()->paginate(6);
        return view('admin.auth.ui.layout.online_appointment.online_appointment_list', compact('online_appointment_list'));
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $delonlineappointment =Appointment::findOrFail($id);
//        Storage::delete('public/partner-image/'.$delonlineappointment->image);
        $delonlineappointment = $delonlineappointment->delete();


        if($delonlineappointment){
            return to_route('online_appointment.list')->with('success','Service deleted successfully');
        }
        return Redirect::back();
    }


    public function user_appointment_details()
    {
//        dd(\Auth::user()->id);
        $user_appointment_details = Appointment::where('user_id', Auth::user()->id)->latest()->paginate(6);

        return view('admin.auth.ui.layout.online_appointment.user_appointment_details', compact('user_appointment_details'));
    }



}
