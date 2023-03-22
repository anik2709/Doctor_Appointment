@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Doctor's Academic Qualification</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('doctor_academic_qualification.update', $doctor_academic_qualification_list->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <input type="hidden" name="doctor_details_id" value="{{$doctor_academic_qualification_list->id}}">

                        <div class="form-group">
                            <label for="institution_name">Institution Name</label>
                            <input class="form-control" name="institution_name" id="institution_name" value="{{$doctor_academic_qualification_list->institution_name}}" placeholder="Enter Institution Name">
                        </div>
                        @error('institution_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="degree_name">Degree Name</label>
                            <input class="form-control" name="degree_name" id="degree_name" value="{{$doctor_academic_qualification_list->degree_name}}" placeholder="Enter Degree Name">
                        </div>
                        @error('degree_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="degree_from" class="form-label">Degree Starting From</label>
                            <input class="form-control" id="degree_from" value="{{$doctor_academic_qualification_list->degree_from}}" type="month" name="degree_from">
                        </div>
                        @error('degree_from')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="degree_to" class="form-label">Degree End In</label>
                            <input class="form-control" id="degree_to" value="{{$doctor_academic_qualification_list->degree_to}}" type="month" name="degree_to">
                        </div>
                        @error('degree_to')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="degree_status">Degree Status</label>
                            <input class="form-control" name="degree_status" value="{{$doctor_academic_qualification_list->degree_status}}" id="degree_status" placeholder="Degree Status">
                        </div>
                        {{--                        <div class="form-check form-switch">--}}
                        {{--                            <input type="checkbox" class="form-check-input" id="is_present">--}}
                        {{--                            <label class="form-check-label" for="is_present">Is Present</label>--}}
                        {{--                        </div>--}}
                        @error('degree_status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
