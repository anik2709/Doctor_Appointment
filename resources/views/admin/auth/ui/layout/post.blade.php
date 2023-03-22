@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Add new Blog</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Blog Title</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter blog title">
                        </div>
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="description">Blog Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter blog description"></textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="image">Blog Image</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter blog title">
                        </div>
                        @error('image')
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
