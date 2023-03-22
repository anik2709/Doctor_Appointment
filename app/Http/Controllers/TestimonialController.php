<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.auth.ui.layout.testimonial.testimonial');
    }

    public function testimonial_list()
    {
        $testimonial_list=testimonial::latest()->paginate(6);
        return view('admin.auth.ui.layout.testimonial.testimonial_list', compact('testimonial_list'));
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
            $image = Storage::put('/public/testimonial-image/' .$name, file_get_contents($request->file('image')));
        }else{
            $name=null;
        }

        $storePost=Testimonial::create([
            'description'=>$request->get('description'),
            'image'=>$name,
            'rating'=>$request->get('rating'),
            'name'=>$request->get('name')
        ]);

        if ($storePost){
            return to_route('testimonial.list')->with('success','Your testimonial create successfully');
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
        $testimonial =testimonial::findOrFail($id);
        return view('admin.auth.ui.layout.testimonial.testimonial_edit',compact('testimonial'));
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
        $testimonial=Testimonial::find($id);
            $data=[
                'description'=>$request->get('description'),
                'rating'=>$request->get('rating'),
                'name'=>$request->get('name'),
            ];
        if ($request->image){
            Storage::delete('public/testimonial-image/'.$testimonial->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/testimonial-image/' .$name, file_get_contents($request->file('image')));
            $data['image']=$name;
//            dd($data);
        }
        $upPost=$testimonial->update($data);
//
        if($upPost){
            return to_route('testimonial.list')->with('success','Your testimonial update successfully');
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
        $deltestimonial =testimonial::findOrFail($id);
        Storage::delete('public/testimonial-image/'.$deltestimonial->image);
        $deltestimonial = $deltestimonial->delete();


        if($deltestimonial){
            return to_route('testimonial.list')->with('success','Post deleted successfully');
        }
        return Redirect::back();
    }
}
