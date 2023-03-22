@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Doctor's Academic Award And Distinction List</b></h2>
                </div>
                <div class="card-body">
                    {{--                    <h4 class="card-title">All Blog List</h4>--}}
                    <div class="div">
                        <a class="btn btn-primary" href="{{route('doctor_academic_award.create', $doctor)}}" role="button">Add New Award Details</a>
                        <table class="table">
                            @if(\Illuminate\Support\Facades\Session:: has('success'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('success')}}
                                </div>
                            @endif
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Award Name</th>
                                <th scope="col">Award Date</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($doctor_academic_award_list as $doctoracademicawardanddistinctionlist)
                                <tr>
                                    <td scope="row">{{$doctoracademicawardanddistinctionlist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoracademicawardanddistinctionlist->award_name)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($doctoracademicawardanddistinctionlist->award_date)}}</td>

                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('doctor_academic_award.edit', ['id'=>$doctoracademicawardanddistinctionlist->id])}}" class="btn btn-warning btn-sm-2 me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('doctor_academic_award.delete', ['id'=>$doctoracademicawardanddistinctionlist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($doctor_academic_award_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $doctor_academic_award_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
