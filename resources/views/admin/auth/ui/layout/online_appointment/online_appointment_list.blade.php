@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Online Appointment Application List</b></h2>
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
                                <th scope="col">Patient Id</th>
                                <th scope="col">Recommended Doctor Id</th>
{{--                                <th scope="col">Recommended Doctor Name</th>--}}
                                <th scope="col">Patient Date of Birth</th>
                                <th scope="col">Type of Disease</th>
                                <th scope="col">Date For Appointment</th>
                                <th scope="col">Massages</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($online_appointment_list  as $onlineappointmentlist)
                                <tr>
                                    <td scope="row">{{$onlineappointmentlist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($onlineappointmentlist->user_id)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($onlineappointmentlist->doctor_details_id)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($onlineappointmentlist->date_of_birth)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($onlineappointmentlist->disease_type)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($onlineappointmentlist->appointment_date)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($onlineappointmentlist->massage)}}</td>

                                    <td>

                                        <div class="btn-group">

                                            <a href="{{route('online_appointment.delete', ['id'=>$onlineappointmentlist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($online_appointment_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $online_appointment_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
