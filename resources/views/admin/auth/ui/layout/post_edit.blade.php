@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Blog</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
{{--                        <input type="hidden" name="id" value="{{ $post->id }}">--}}

                        <div class="form-group">
                            <label for="title">Blog Title</label>
                            <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title" aria-describedby="title" placeholder="Enter blog title">
                        </div>
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="description">Blog Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter blog description">{{$post->description}}</textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="image">Blog Image</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter blog image">
                            <img src="{{asset('storage/post-image/'.$post->image)}}" alt="" style="height: 300px; width: auto"/>
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
