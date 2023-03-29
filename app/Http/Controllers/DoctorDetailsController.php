<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DoctorAcademicAwardAndDistinction;
use App\Models\DoctorActivityAndPresentation;
use App\Models\DoctorDetail;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DoctorDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.auth.ui.layout.doctor.doctor', compact('category'));
    }

    public function doctor_list()
    {
        $doctor_list=DoctorDetail::with('category')->latest()->paginate(6);
//        $category = Category::all();
        return view('admin.auth.ui.layout.doctor.doctor_list', compact('doctor_list', ));
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
     * @param  \Illuminate\Http\Request
     * $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());
        if ($request->file('image')){
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/doctor-image/' .$name, file_get_contents($request->file('image')));
        }else{
            $name=null;
        }

        $storePost=DoctorDetail::create([

            'id'=>$request->get('doctor_details_id'),
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'telephone'=>$request->get('telephone'),
            'website'=>$request->get('website'),
            'description'=>$request->get('description'),
            'category_name'=>$request->get('category_id'),
            'image'=>($name),

        ]);
        if ($storePost){
            return to_route('doctor.list')->with('success','Your partner create successfully');
        }else{
            return Redirect::back();
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $doctor_details =DoctorDetail::findOrFail($id);
        return view('admin.auth.ui.layout.doctor.doctor_edit',compact('doctor_details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $doctor_details=DoctorDetail::findOrfail($id);
        $data=[
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'telephone'=>$request->get('telephone'),
            'website'=>$request->get('website'),
            'description'=>$request->get('description'),
        ];
        if ($request->image){
            Storage::delete('public/doctor-image/'.$doctor_details->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/partner-image/' .$name, file_get_contents($request->file('image')));
            $data['image']=$name;
        }
        $upPost=$doctor_details->update($data);

        if($upPost){
            return to_route('doctor.list')->with('success','Doctor information update successfully');
        }
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deldoctor =DoctorDetail::findOrFail($id);
        Storage::delete('public/doctor-image/'.$deldoctor->image);
        $deldoctor = $deldoctor->delete();


        if($deldoctor){
            return to_route('doctor.list')->with('success','Doctor information deleted successfully');
        }
        return Redirect::back();
    }
}
