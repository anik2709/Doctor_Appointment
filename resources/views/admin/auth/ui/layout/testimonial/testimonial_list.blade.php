@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Testimonial List</b></h2>
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
                                <th scope="col">Testimonial Description</th>
                                <th scope="col">Testimonial image</th>
                                <th scope="col">User Rating</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($testimonial_list as $testimoniallist)
                                <tr>
                                    <td scope="row">{{$testimoniallist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($testimoniallist->description, 200, '......')}}</td>

                                    <td>
                                        <img src="{{asset('storage/testimonial-image/'.$testimoniallist->image)}}" alt="" style="height: 100px; width: auto"/>
                                    </td>

                                    <td>{{\Illuminate\Support\Str::limit($testimoniallist->rating)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($testimoniallist->name)}}</td>

                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('testimonial.edit', ['id'=>$testimoniallist->id])}}" class="btn btn-warning btn-sm-2">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('testimonial.delete', ['id'=>$testimoniallist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($testimonial_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $testimonial_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
