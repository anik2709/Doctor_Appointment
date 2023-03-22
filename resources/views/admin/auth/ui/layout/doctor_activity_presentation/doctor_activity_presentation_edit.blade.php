@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Doctor's Activity And Presentation</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('doctor_activity_and_presentation.update', $doctor_activity_and_presentation_list->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <input type="hidden" name="doctor_details_id" value="{{$doctor_activity_and_presentation_list->id}}">

                        <div class="form-group">
                            <label for="research_name">research_name</label>
                            <input class="form-control" name="research_name" id="research_name" value="{{$doctor_activity_and_presentation_list->research_name}}" type="text" placeholder="Enter Research Name">
                        </div>
                        @error('research_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="research_from">research_from</label>
                            <input class="form-control" name="research_from" id="research_from" value="{{$doctor_activity_and_presentation_list->research_from}}" type="text" placeholder="Enter Research Starting Date">
                        </div>
                        @error('research_from')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="research_to" class="form-label">research_to</label>
                            <input class="form-control" name="research_to" id="research_to" value="{{$doctor_activity_and_presentation_list->research_to}}" type="text" placeholder="Enter Research Ending Date">
                        </div>
                        @error('degree_from')
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
