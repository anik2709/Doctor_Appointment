<?php

namespace App\Http\Controllers;

use App\Models\DoctorActivityAndPresentation;
use App\Models\DoctorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DoctorActivityPresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $doctorList = \DB::table('doctor_details')->select('id', 'name')->get();
//        dd($doctorList);
        return view('admin.auth.ui.layout.doctor_activity_presentation.doctor_activity_presentation_list', compact('doctorList'));
    }

    public function doctor_activity_and_presentation_list($id)
    {
        $data['doctor_activity_and_presentation_list'] = DoctorActivityAndPresentation::where('doctor_details_id', $id)->orderByDesc('created_at')->paginate(3);
        $data['doctor'] = $id;
        return view('admin.auth.ui.layout.doctor_activity_presentation.doctor_activity_presentation_list', $data);
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
        return view('admin.auth.ui.layout.doctor_activity_presentation.doctor_activity_presentation', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $storePost = DoctorActivityAndPresentation:: create([

            'doctor_details_id' => $request->get('doctor_details_id'),
            'research_name' => $request->get('research_name'),
            'research_from' => $request->get('research_from'),
            'research_to' => $request->get('research_to'),


        ]);
        if ($storePost) {
            return to_route('doctor_activity_and_presentation.list', $request->get('doctor_details_id'))->with('success', 'Doctor activity and presentation information create successfully');
        } else {
            return Redirect::back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
//        dd($id);
        $doctor_activity_and_presentation_list = DoctorActivityAndPresentation::findOrFail($id);
        return view('admin.auth.ui.layout.doctor_activity_presentation.doctor_activity_presentation_edit', compact('doctor_activity_and_presentation_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $doctor_activity_and_presentation_list = DoctorActivityAndPresentation::findOrfail($id);
        $data = [
            'research_name' => $request->get('research_name'),
            'research_from' => $request->get('research_from'),
            'research_to' => $request->get('research_to'),
        ];

        $upPost = $doctor_activity_and_presentation_list->update($data);

        if ($upPost) {
            return to_route('doctor_activity_and_presentation.list', $doctor_activity_and_presentation_list->doctor_details_id)->with('success', 'Doctor activity and presentation information update successfully');
        }
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deldoctoractivityandpresentation = DoctorActivityAndPresentation::findOrFail($id);
        $deldoctoractivityandpresentation->delete();

        if ($deldoctoractivityandpresentation) {
            return to_route('doctor_activity_and_presentation.list', $deldoctoractivityandpresentation->doctor_details_id)->with('success', 'Doctor activity and presentation information delete successfully');
        }
        return Redirect::back();
    }
}
