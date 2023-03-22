@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Add new Testimonial</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Testimonial Image</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter blog title">
                        </div>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="description">Testimonial Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter testimonial description"></textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="rating">Testimonial Rating</label>
                            <input class="form-control" name="rating" id="rating" >
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="rating">User Name</label>
                            <input class="form-control" name="name" id="name" >
                        </div>
                        @error('name')
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
