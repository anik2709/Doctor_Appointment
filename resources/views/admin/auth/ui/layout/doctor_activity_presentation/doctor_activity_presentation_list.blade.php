@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Doctor's Activity And Presentation List</b></h2>
                </div>
                <div class="card-body">
                    {{--                    <h4 class="card-title">All Blog List</h4>--}}
                    <div class="div">

                        <a class="btn btn-primary" href="{{route('doctor_activity_and_presentation.create', $doctor)}}" role="button">Add New Activity And Presentation Details</a>

                        <table class="table">

                            @if(\Illuminate\Support\Facades\Session:: has('success'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('success')}}
                                </div>
                            @endif

                            <thead class="thead-dark">

                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Research Name</th>
                                <th scope="col">Research Starting Date</th>
                                <th scope="col">Research Ending Date</th>
                                <th scope="col">Action</th>
                            </tr>

                            </thead>

                            <tbody>

                            @foreach($doctor_activity_and_presentation_list as $doctoractivityandpresentation)
                                <tr>
                                    <td scope="row">{{$doctoractivityandpresentation->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoractivityandpresentation->research_name)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoractivityandpresentation->research_from)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoractivityandpresentation->research_to)}}</td>


                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('doctor_activity_and_presentation.edit', ['id'=>$doctoractivityandpresentation->id])}}" class="btn btn-warning btn-sm-2 me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('doctor_activity_and_presentation.delete', ['id'=>$doctoractivityandpresentation->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($doctor_activity_and_presentation_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $doctor_activity_and_presentation_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
