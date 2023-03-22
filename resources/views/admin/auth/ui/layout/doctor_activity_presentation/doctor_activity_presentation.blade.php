@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Add Doctor Activity & Presentation</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('doctor_activity_and_presentation.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="doctor_details_id" value="{{ $doctor->id }}">

{{--                        <div class="mb-3">--}}
{{--                            <label for="doctor_details_id" class="form-label">Doctor Name</label>--}}
{{--                            <select class="form-select" name="doctor_id" id="doctor_details_id" >--}}
{{--                                <option value="" selected>Select A Doctor</option>--}}
{{--                                @foreach($doctorList as $doctor)--}}
{{--                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label for="research_name">Research Name</label>
                            <input class="form-control" name="research_name" type="text" id="research_name"  placeholder="Enter Doctor's Research name">
                        </div>
                        @error('research_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="research_from" class="form-label">Research From</label>
                            <input class="form-control" id="research_from" type="text" name="research_from" placeholder="Enter Doctor's Research Starting Date">
                        </div>
                        @error('research_from')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="research_to" class="form-label">Research To</label>
                            <input class="form-control" id="research_to" type="text" name="research_to" placeholder="Enter Doctor's Research Ending Date">
                        </div>
                        @error('research_to')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


{{--                        <div class="form-check form-switch">--}}
{{--                            <input type="checkbox" class="form-check-input" id="is_present">--}}
{{--                            <label class="form-check-label" for="is_present">Is Present</label>--}}
{{--                        </div>--}}
{{--                        @error('is_present')--}}
{{--                        <span class="text-danger">{{$message}}</span>--}}
{{--                        @enderror--}}


                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
