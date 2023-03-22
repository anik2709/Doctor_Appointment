@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Add Doctor's Academic Award & Distinction</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('doctor_academic_award.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="doctor_details_id" value="{{ $doctor->id }}">

{{--                        <div class="mb-3">--}}
{{--                            <label for="doctor_details_id" class="form-label">Doctor Name</label>--}}
{{--                            <select class="form-select" name="doctor_id" id="doctor_details_id" >--}}
{{--                              <optgroup label="Select A Doctor">Select A Doctor</optgroup>--}}
{{--                                <option value="" selected>Select A Doctor</option>--}}
{{--                                @foreach($doctorList as $doctor)--}}
{{--                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}



                        <div class="form-group">
                            <label for="award_name">Award Name</label>
                            <input class="form-control" name="award_name" id="award_name" placeholder="Enter award name">
                        </div>
                        @error('award_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="award_date" class="form-label">Award Date</label>
                            <input class="form-control" id="award_date" type="date" name="award_date" placeholder="Enter Academic Award Date">
                        </div>
                        @error('award_date')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
