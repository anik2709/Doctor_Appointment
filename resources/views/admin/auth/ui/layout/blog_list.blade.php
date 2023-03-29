@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Blog List</b></h2>
                </div>
                <div class="card-body">
                    {{--                    <h4 class="card-title">All Blog List</h4>--}}
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
                                <th scope="col">Blog Title</th>
                                <th scope="col">BLOG Description</th>
                                <th scope="col">Blog image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blog_list as $bloglist)
                                <tr>
                                    <td scope="row">{{$bloglist->id}}</td>

                                    <td>{{$bloglist->title}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($bloglist->description, 200, '......')}}</td>

                                    <td>
                                        <img src="{{asset('storage/post-image/'.$bloglist->image)}}" alt=""
                                             style="height: 100px; width: auto"/>
                                    </td>

                                    <td>
                                        {{\Carbon\Carbon::parse($bloglist->created_at)->format('Y-m-d h:g')}}
                                    </td>

                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('post.edit', ['id'=>$bloglist->id])}}"
                                               class="btn btn-warning btn-sm-2">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="{{route('post.delete', ['id'=>$bloglist->id])}}"
                                               class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($blog_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $blog_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
