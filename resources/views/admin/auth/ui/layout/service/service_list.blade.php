@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Special High Quality Service List</b></h2>
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
                                <th scope="col">Service Title</th>
                                <th scope="col">Service Description</th>
                                <th scope="col">Service Image</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($service_list as $servicelist)
                                <tr>
                                    <td scope="row">{{$servicelist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($servicelist->title)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($servicelist->description, 200, '......')}}</td>

                                    <td>
                                        <img src="{{asset('storage/service-image/'.$servicelist->image)}}" alt="" style="height: 100px; width: auto"/>
                                    </td>


                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('service.edit', ['id'=>$servicelist->id])}}" class="btn btn-warning btn-sm me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('service.delete', ['id'=>$servicelist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($service_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $service_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
