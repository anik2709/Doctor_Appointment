<?php

namespace App\Http\Controllers;

use App\Models\DoctorAcademicAwardAndDistinction;
use App\Models\DoctorAcademicQualification;
use App\Models\DoctorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DoctorAcademicQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $doctorList=\DB::table('doctor_details')->select('id', 'name')->get();
//        dd($doctorList);
        return view('admin.auth.ui.layout.doctor_academic_qualification.doctor_academic_qualification_list', compact('doctorList'));
    }

    public function doctor_academic_qualification_list($id)
    {
        $data['doctor_academic_qualification_list'] =DoctorAcademicQualification::where('doctor_details_id', $id)->orderByDesc('created_at')->paginate(3);
        $data['doctor'] = $id;
        return view('admin.auth.ui.layout.doctor_academic_qualification.doctor_academic_qualification_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(DoctorDetail $id)
    {
//       dd($id);
        $data['doctor'] = $id;
        return view('admin.auth.ui.layout.doctor_academic_qualification.doctor_academic_qualification', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $storePost = DoctorAcademicQualification:: create([

            'doctor_details_id' => $request->get('doctor_details_id'),
            'institution_name' => $request->get('institution_name'),
            'degree_name' => $request->get('degree_name'),
            'degree_from' => $request->get('degree_from'),
            'degree_to' => $request->get('degree_to'),
            'degree_status' => $request->get('degree_status'),

        ]);
        if ($storePost) {
            return to_route('doctor_academic_qualification.list', $request->get('doctor_details_id'))->with('success', 'Doctor academic qualification information create successfully');
        } else {
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
//        dd($id);
        $doctor_academic_qualification_list =DoctorAcademicQualification::findOrFail($id);
        return view('admin.auth.ui.layout.doctor_academic_qualification.doctor_academic_qualification_edit',compact('doctor_academic_qualification_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * $request
     * @return \Illuminate\Http\RedirectResponse
     */
        public function update(Request $request, $id)
    {
        $doctor_academic_qualification_list=DoctorAcademicQualification::findOrfail($id);
        $data=[
            'institution_name'=>$request->get('institution_name'),
            'degree_name'=>$request->get('degree_name'),
            'degree_from'=>$request->get('degree_from'),
            'degree_to'=>$request->get('degree_to'),
            'degree_status'=>$request->get('degree_status'),
        ];

        $upPost=$doctor_academic_qualification_list->update($data);

        if($upPost){
            return to_route('doctor_academic_qualification.list', $doctor_academic_qualification_list->doctor_details_id)->with('success','Doctor academic qualification information update successfully');
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
        $deldoctoracademicqualification =DoctorAcademicQualification::findOrFail($id);
        $deldoctoracademicqualification->delete();

        if($deldoctoracademicqualification){
            return to_route('doctor_academic_qualification.list',$deldoctoracademicqualification->doctor_details_id)->with('success','Doctor academic qualification information delete successfully');
        }
        return Redirect::back();
    }
}
