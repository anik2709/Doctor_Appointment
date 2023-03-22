<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\DoctorDetail;
use App\Models\Post;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
//    public function index()
//    {
//      $doctors =  DoctorDetail::with(['awardAndDistinction', 'academicQualification', 'activityPresentation'] )->get();
////        return $doctors;
//      return view('frontend.doctor_details', compact('doctors'));
//    }

    public function doctor_list()
    {

        $doctors =  DoctorDetail::all();
//        return $doctors;
        return view('frontend.doctor_list', compact('doctors'));
    }

    public function doctor_details(string $id)
    {
//        dd($id);
        $singleDoctor = DoctorDetail::where('id', $id)->with(['awardAndDistinction', 'academicQualification', 'activityPresentation'] )->first();
//       dd($singleDoctor);
//        return $singleDoctor;
        return  view('frontend.doctor_details',compact('singleDoctor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
