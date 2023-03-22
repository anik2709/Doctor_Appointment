<?php

namespace App\Http\Controllers;

use App\Models\DoctorAcademicAwardAndDistinction;
use App\Models\DoctorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DoctorAcademicAwardController extends Controller
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
        return view('admin.auth.ui.layout.doctor_academic_award.doctor_academic_award_distinction_list', compact('doctorList'));
    }

    public function doctor_academic_award_list($id)
    {
        $data['doctor_academic_award_list'] =DoctorAcademicAwardAndDistinction::where('doctor_details_id',$id)->orderByDesc('created_at')->paginate(3);
        $data['doctor'] = $id;
        return view('admin.auth.ui.layout.doctor_academic_award.doctor_academic_award_distinction_list', $data);
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
        return view('admin.auth.ui.layout.doctor_academic_award.doctor_academic_award_distinction', $data);
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
        $storePost=DoctorAcademicAwardAndDistinction:: create([

            'doctor_details_id'=>$request->get('doctor_details_id'),
            'award_name'=>$request->get('award_name'),
            'award_date'=>$request->get('award_date'),

        ]);
        if ($storePost){
            return to_route('doctor_academic_award.list', $request->get('doctor_details_id'))->with('success','Doctor academic award and distinction information create successfully');
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
//        dd($id);
        $doctor_academic_award_list =DoctorAcademicAwardAndDistinction::findOrFail($id);
        return view('admin.auth.ui.layout.doctor_academic_award.doctor_academic_award_distinction_edit',compact('doctor_academic_award_list'));
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
        $doctor_academic_award_list=DoctorAcademicAwardAndDistinction::findOrfail($id);
        $data=[
            'award_name'=>$request->get('award_name'),
            'award_date'=>$request->get('award_date'),
        ];

        $upPost=$doctor_academic_award_list->update($data);

        if($upPost){
            return to_route('doctor_academic_award.list', $doctor_academic_award_list->doctor_details_id)->with('success','Doctor academic award and distinction information update successfully');
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
        $deldoctoracademicawardanddistinction =DoctorAcademicAwardAndDistinction::findOrFail($id);
        $deldoctoracademicawardanddistinction->delete();

        if($deldoctoracademicawardanddistinction){
            return to_route('doctor_academic_award.list',$deldoctoracademicawardanddistinction->doctor_details_id)->with('success','Doctor academic award and distinction information delete successfully');
        }
        return Redirect::back();
    }
}
