<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('admin.auth.ui.layout.post');
    }

    public function blog_list()
    {
        $blog_list=Post::latest()->paginate(6);
        return view('admin.auth.ui.layout.blog_list', compact('blog_list'));
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
            $image = Storage::put('/public/post-image/' .$name, file_get_contents($request->file('image')));
        }else{
            $name=null;
        }

        $storePost=Post::create([
            'user_id'=>\Auth::id(),
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'image'=>$name
        ]);

        if ($storePost){
            return to_route('post.blog_list')->with('success','Your post create successfully');
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
        $post =Post::findOrFail($id);
        return view('admin.auth.ui.layout.post_edit',compact('post'));
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
        $post=Post::findOrFail($id);
        $data=[
            'user_id'=>\Auth::user()->id,
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
        ];
        if ($request->image){
            Storage::delete('public/post-image/'.$post->image);
            $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/post-image/' .$name, file_get_contents($request->file('image')));
            $data['image']=$name;
        }
//
        $upPost=$post->update($data);;
        if($upPost){
            return to_route('post.blog_list')->with('success','Your post update successfully');
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
        $delpost =Post::findOrFail($id);
        Storage::delete('public/post-image/'.$delpost->image);
        $delpost = $delpost->delete();


        if($delpost){
            return to_route('post.blog_list')->with('success','Post deleted successfully');
        }
        return Redirect::back();
    }
}
