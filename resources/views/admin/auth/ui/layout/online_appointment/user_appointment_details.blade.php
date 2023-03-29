@extends('admin.auth.ui.layout.user_dashboard.master_user')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Appointment Details</b></h2>
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
{{--                            <th scope="col">Recommended Doctor Name</th>--}}
                                <th scope="col">Patient Date of Birth</th>
                                <th scope="col">Type of Disease</th>
                                <th scope="col">Date For Appointment</th>
                                <th scope="col">Massages</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($user_appointment_details as $userappointmentdetails)
                                <tr>
                                    <td scope="row">{{$userappointmentdetails->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($userappointmentdetails->user_id)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($userappointmentdetails->doctor_details_id)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($userappointmentdetails->date_of_birth)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($userappointmentdetails->disease_type)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($userappointmentdetails->appointment_date)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($userappointmentdetails->massage)}}</td>

                                    <td>

                                        <div class="btn-group">

                                            <a href="{{route('online_appointment.delete', ['id'=>$userappointmentdetails->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>

                                        </div>

                                    </td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($user_appointment_details->hasPages())
                            <div class="pagination-wrapper">
                                {{ $user_appointment_details->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
