<?php

namespace App\Http\Controllers;

use App\Models\DoctorDetail;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.auth.ui.layout.partner.partner');
    }


    public function partner_list()
    {
        $partner_list=Partner::latest()->paginate(6);
        return view('admin.auth.ui.layout.partner.partner_list', compact('partner_list'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->file('image')){
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/partner-image/' .$name, file_get_contents($request->file('image')));
        }else{
            $name=null;
        }

        $storePost=Partner::create([
            'image'=>$name,
            'value'=>$request->get('value'),
        ]);

        if ($storePost){
            return to_route('partner.list')->with('success','Your partner create successfully');
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
        $partner =Partner::findOrFail($id);
        return view('admin.auth.ui.layout.partner.partner_edit',compact('partner'));
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
        $partner=Partner::findOrfail($id);
        $data=[
            'value'=>$request->get('value'),
        ];
        if ($request->image){
            Storage::delete('public/partner-image/'.$partner->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/partner-image/' .$name, file_get_contents($request->file('image')));
            $data['image']=$name;
        }
        $upPost=$partner->update($data);

        if($upPost){
            return to_route('partner.list')->with('success','Your partner info update successfully');
        }
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $delpartner =Partner::findOrFail($id);
        Storage::delete('public/partner-image/'.$delpartner->image);
        $delpartner = $delpartner->delete();


        if($delpartner){
            return to_route('partner.list')->with('success','Service deleted successfully');
        }
        return Redirect::back();
    }
}
