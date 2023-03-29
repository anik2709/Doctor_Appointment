<?php

namespace App\Http\Controllers;

use App\Models\DoctorDetail;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $testimonials =Testimonial::all();
        $allPosts = Post::with('users')->get();
        $partners = Partner::all();
        $services = Service::all();
        $doctors =  DoctorDetail::with(['awardAndDistinction', 'academicQualification', 'activityPresentation'] )->get();
        $aboutustitle= getsideSettingsData('About Us Title');
        $aboutusdescription= getsideSettingsData('About Us Description');
        $happypatients= getsideSettingsData('Happy Patients');
        $hospitalrooms= getsideSettingsData('Hospital Rooms');
        $awardwin= getsideSettingsData('Award Win');
        $ambulance= getsideSettingsData('Ambulance');
        $phone= getsideSettingsData('Phone');
        $email= getsideSettingsData('Email');
        $address= getsideSettingsData('Address');
        $address2= getsideSettingsData('Address2');

//        return $doctors;
        return view('frontend.home', compact('testimonials', 'allPosts', 'partners', 'services', 'doctors', 'aboutustitle', 'aboutusdescription','happypatients','hospitalrooms','awardwin', 'ambulance', 'phone', 'email', 'address', 'address2'));

    }


    public function services(){
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function contact_us(){
        return view('frontend.contact_us');
    }


    public function about_us(){
        $aboutustitle= getsideSettingsData('About Us Title');
        $aboutusdescription= getsideSettingsData('About Us Description');
        return view('frontend.about_us', compact('aboutustitle', 'aboutusdescription'));
    }


}
