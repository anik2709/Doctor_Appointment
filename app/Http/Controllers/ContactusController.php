<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SideSetting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\NoReturn;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contact_us_list=SideSetting::latest()->paginate(6);
        //dd($contact_us_list);
        return view('admin.auth.ui.layout.contact_us.contact_us_list',compact('contact_us_list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.auth.ui.layout.contact_us.contact_us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $storePost=SideSetting::create([
            'key'=>$request->get('key'),
            'value'=>$request->get('value'),
        ]);

        if ($storePost){
            return to_route('contact_us.add')->with('success','Your testimonial create successfully');
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
        $contactus =SideSetting::findOrFail($id);
        return view('admin.auth.ui.layout.contact_us.contact_us_edit',compact('contactus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $contactus=SideSetting::findOrFail($id);
        $data=[
            'key'=>$request->get('key'),
            'value'=>$request->get('value'),
        ];
//        if ($request->image){
//            Storage::delete('public/testimonial-image/'.$testimonial->image);
//            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
//            $image = Storage::put('/public/testimonial-image/' .$name, file_get_contents($request->file('image')));
//            $data['image']=$name;
////            dd($data);
//        }
        $upPost=$contactus->update($data);
//
        if($upPost){
            return to_route('contact_us.add')->with('success','Your testimonial update successfully');
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
        $delcontactus =SideSetting::findOrFail($id);
//        Storage::delete('public/testimonial-image/'.$delcontactus->image);
        $delcontactus = $delcontactus->delete();


        if($delcontactus){
            return to_route('contact_us.add')->with('success','Settings deleted successfully');
        }
        return Redirect::back();
    }
}
