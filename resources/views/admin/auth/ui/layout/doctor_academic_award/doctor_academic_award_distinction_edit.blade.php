@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Doctor Academic Award And Distinction Information</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('doctor_academic_award.update',$doctor_academic_award_list->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <input type="hidden" name="id" value="{{ $doctor_academic_award_list->id }}">

                        <div class="form-group">
                            <label for="award_name">Award Name</label>
                            <input type="text" name="award_name" value="{{$doctor_academic_award_list->award_name}}" class="form-control" id="award_name" aria-describedby="award_name" placeholder="Enter award name">
                        </div>
                        @error('award_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="award_date">Award Date</label>
                            <input type="date" name="award_date" value="{{$doctor_academic_award_list->award_date}}" class="form-control" id="award_date" aria-describedby="award_date" placeholder="Enter doctor email">
                        </div>
                        @error('award_date')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

{{--                        <div class="mb-3">--}}
{{--                            <label for="award_date" class="form-label">Award Date</label>--}}
{{--                            <input class="form-control" id="award_date" type="date" name="award_date">--}}
{{--                        </div>--}}
{{--                        @error('award_date')--}}
{{--                        <span class="text-danger">{{$message}}</span>--}}
{{--                        @enderror--}}

                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection
