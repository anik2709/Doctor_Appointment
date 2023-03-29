<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.auth.ui.layout.category.category');
    }

    public function category_list()
    {
        $category_list=Category::latest()->paginate();
        return view('admin.auth.ui.layout.category.category_list', compact('category_list'));
    }



    public function store(Request $request)
    {
        $categoryPost=Category::create([
            'category_name'=>$request->get('category_name'),
        ]);

        if ($categoryPost){
            return to_route('category.list')->with('success','Your service create successfully');
        }else{
            return Redirect::back();
        }
    }

    public function edit($id)
    {
        $category =Category::findOrFail($id);
        return view('admin.auth.ui.layout.category.category_edit',compact('category'));
    }


    public function update(Request $request, $id)
    {
//        dd($request->all());
        $category=Category::findOrfail($id);
        $data=[
            'category_name'=>$request->get('category_name'),
        ];
        $upPost=$category->update($data);

        if($upPost){
            return to_route('category.list')->with('success','Your service update successfully');
        }
        return Redirect::back();
    }


    public function destroy($id)
    {
        $delcategory =Category::findOrFail($id);
        $delcategory = $delcategory->delete();


        if($delcategory){
            return to_route('category.list')->with('success','Service deleted successfully');
        }
        return Redirect::back();
    }
}
