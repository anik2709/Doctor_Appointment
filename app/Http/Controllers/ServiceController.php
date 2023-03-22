<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.auth.ui.layout.service.service');
    }


    public function service_list()
    {
        $service_list=Service::latest()->paginate(6);
        return view('admin.auth.ui.layout.service.service_list', compact('service_list'));
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
            $image = Storage::put('/public/service-image/' .$name, file_get_contents($request->file('image')));
        }else{
            $name=null;
        }

        $storePost=Service::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'image'=>$name,
        ]);

        if ($storePost){
            return to_route('service.list')->with('success','Your service create successfully');
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
        $service =Service::findOrFail($id);
        return view('admin.auth.ui.layout.service.service_edit',compact('service'));
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
//        $service=Service::findOrFail($id);
//        $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
//        $image = Storage::put('/public/service-image/' .$name, file_get_contents($request->file('image')));
//        $upPost=$service->update([
//            'title'=>$request->get('title'),
//            'description'=>$request->get('description'),
//            'image'=>$name
//        ]);
//
//        if($upPost){
//            return to_route('service.list')->with('success','Your service update successfully');
//        }
//        return Redirect::back();

        $service=Service::findOrfail($id);
        $data=[
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
        ];
        if ($request->image){
            Storage::delete('public/service-image/'.$service->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/service-image/' .$name, file_get_contents($request->file('image')));
            $data['image']=$name;
        }
        $upPost=$service->update($data);

        if($upPost){
            return to_route('service.list')->with('success','Your service update successfully');
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
        $delservice =Service::findOrFail($id);
        Storage::delete('public/service-image/'.$delservice->image);
        $delservice = $delservice->delete();


        if($delservice){
            return to_route('service.list')->with('success','Service deleted successfully');
        }
        return Redirect::back();
    }
}
