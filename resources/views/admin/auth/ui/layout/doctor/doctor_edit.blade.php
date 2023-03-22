@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Doctor Information</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('doctor.update',$doctor_details->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $doctor_details->id }}">

                        <div class="form-group">
                            <label for="name">Doctor Name</label>
                            <input type="text" name="name" value="{{$doctor_details->name}}" class="form-control" id="name" aria-describedby="name" placeholder="Enter doctor name">
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="email">Doctor E-mail</label>
                            <input type="text" name="email" value="{{$doctor_details->email}}" class="form-control" id="email" aria-describedby="email" placeholder="Enter doctor email">
                        </div>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="telephone">Doctor Telephone Number</label>
                            <input type="text" name="telephone" value="{{$doctor_details->telephone}}" class="form-control" id="telephone" aria-describedby="telephone" placeholder="Enter doctor telephone number">
                        </div>
                        @error('telephone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="website">Doctor Website Address</label>
                            <input type="text" name="website" value="{{$doctor_details->website}}" class="form-control" id="website" aria-describedby="website" placeholder="Enter doctor website address">
                        </div>
                        @error('website')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="description">Doctor Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter doctor description">{{$doctor_details->description}}</textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="image">Doctor Image</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter doctor image">
                            <img src="{{asset('storage/doctor-image/'.$doctor_details->image)}}" alt="" style="height: 300px; width: auto"/>
                        </div>
                        @error('image')
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
