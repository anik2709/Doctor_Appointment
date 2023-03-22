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
//        return $doctors;
        return view('frontend.home', compact('testimonials', 'allPosts', 'partners', 'services', 'doctors'));

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
        return view('contact_us.page');
    }


}
