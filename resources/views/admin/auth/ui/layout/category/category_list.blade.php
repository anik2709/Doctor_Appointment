@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Category list</b></h2>
                </div>
                <div class="card-body">
                    <div class="div">
                        <table class="table">
                            @if(\Illuminate\Support\Facades\Session:: has('success'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('success')}}
                                </div>
                            @endif
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Action</th>

                            </tr>

                            </thead>
                            <tbody>

                            @foreach($category_list as $categorylist)
                                <tr>
                                    <td scope="row">{{$categorylist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($categorylist->category_name)}}</td>

                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('category.edit', ['id'=>$categorylist->id])}}" class="btn btn-warning btn-sm me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('category.delete', ['id'=>$categorylist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

{{--                        @if ($category_list->hasPages())--}}
{{--                            <div class="pagination-wrapper">--}}
{{--                                {{ $category_list->links() }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
