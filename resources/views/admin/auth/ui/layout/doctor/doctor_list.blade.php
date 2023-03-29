@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Doctor's List</b></h2>
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
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Doctor Category</th>
                                <th scope="col">Doctor Email</th>
                                <th scope="col">Doctor Telephone Number</th>
                                <th scope="col">Doctor Website Address</th>
                                <th scope="col">Doctor Description</th>
                                <th scope="col">Doctor Image</th>
                                <th scope="col">Other Details</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($doctor_list as $doctorlist)
                                <tr>
                                    <td scope="row">{{$doctorlist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctorlist->name)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctorlist->category->category_name)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctorlist->email)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctorlist->telephone)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctorlist->website)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctorlist->description, 10, '......')}}</td>

                                    <td>
                                        <img src="{{asset('storage/doctor-image/'.$doctorlist->image)}}" alt="" style="height: 100px; width: auto"/>
                                    </td>

                                    <td>
                                        <ul style="list-style: none">

                                            <li>
                                                <a class="btn btn-outline-info btn-sm mb-1" href="{{route('doctor_academic_award.list',$doctorlist->id)}}" role="button"><b>Academic Award</b></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-outline-info btn-sm mb-1" href="{{route('doctor_academic_qualification.list',$doctorlist->id)}}" role="button"><b>Academic Qualification</b></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-outline-info btn-sm mb-1" href="{{route('doctor_activity_and_presentation.list',$doctorlist->id)}}" role="button"><b>Activity Presentation</b></a>
                                            </li>
                                        </ul>
                                    </td>

                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('doctor.edit', ['id'=>$doctorlist->id])}}" class="btn btn-warning btn-sm-2 me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('doctor.delete', ['id'=>$doctorlist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($doctor_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $doctor_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
