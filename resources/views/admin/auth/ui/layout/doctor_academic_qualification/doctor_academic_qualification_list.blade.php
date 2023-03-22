@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Doctor's Academic Qualification List</b></h2>
                </div>
                <div class="card-body">
                    {{--                    <h4 class="card-title">All Blog List</h4>--}}
                    <div class="div">

                        <a class="btn btn-primary" href="{{route('doctor_academic_qualification.create', $doctor)}}" role="button">Add New Academic Qualification Details</a>

                        <table class="table">

                            @if(\Illuminate\Support\Facades\Session:: has('success'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('success')}}
                                </div>
                            @endif

                            <thead class="thead-dark">

                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Institution Name</th>
                                <th scope="col">Degree Name</th>
                                <th scope="col">Degree Starting From</th>
                                <th scope="col">Degree End In</th>
                                <th scope="col">Degree Status</th>
                                <th scope="col">Action</th>
                            </tr>

                            </thead>

                            <tbody>

                            @foreach($doctor_academic_qualification_list as $doctoracademicqualificationlist)
                                <tr>
                                    <td scope="row">{{$doctoracademicqualificationlist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoracademicqualificationlist->institution_name)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoracademicqualificationlist->degree_name)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoracademicqualificationlist->degree_from)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoracademicqualificationlist->degree_to)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoracademicqualificationlist->degree_status)}}</td>


                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('doctor_academic_qualification.edit', ['id'=>$doctoracademicqualificationlist->id])}}" class="btn btn-warning btn-sm-2 me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('doctor_academic_qualification.delete', ['id'=>$doctoracademicqualificationlist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($doctor_academic_qualification_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $doctor_academic_qualification_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
