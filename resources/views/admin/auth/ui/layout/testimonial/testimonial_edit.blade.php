@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Testimonial</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('testimonial.update',$testimonial->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $testimonial->id }}">
                        <div class="form-group">
                            <label for="description">Testimonial Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter blog description">{{$testimonial->description}}</textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="image">Testimonial Image</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter testimonial image">
                            <img src="{{asset('storage/testimonial-image/'.$testimonial->image)}}" alt="" style="height: 300px; width: auto"/>
                        </div>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="rating">Testimonial rating</label>
                            <textarea class="form-control" name="rating" id="rating" rows="3" placeholder="Enter testimonial rating">{{$testimonial->rating}}</textarea>
                        </div>
                        @error('rating')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="rating">User Name</label>
                            <textarea class="form-control" name="name" id="rating" rows="3" placeholder="Enter user name">{{$testimonial->name}}</textarea>
                        </div>
                        @error('rating')
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
