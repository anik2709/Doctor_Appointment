@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Services</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $service->id }}">

                        <div class="form-group">
                            <label for="title">Service Title</label>
                            <input type="text" name="title" value="{{$service->title}}" class="form-control" id="title" aria-describedby="title" placeholder="Enter service title">
                        </div>
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="description">Service Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter blog description">{{$service->description}}</textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="image">Blog Image</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter blog image">
                            <img src="{{asset('storage/service-image/'.$service->image)}}" alt="" style="height: 300px; width: auto"/>
                        </div>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
{{--                    <form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}
{{--                        <input type="hidden" name="id" value="{{ $service->id }}">--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="title">Enter service title</label>--}}
{{--                            <input class="form-control" name="title" id="title" >--}}
{{--                        </div>--}}
{{--                        @error('title')--}}
{{--                        <span class="text-danger">{{$message}}</span>--}}
{{--                        @enderror--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="description">Enter service description</label>--}}
{{--                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter service description">{{$service->description}}</textarea>--}}
{{--                        </div>--}}
{{--                        @error('description')--}}
{{--                        <span class="text-danger">{{$message}}</span>--}}
{{--                        @enderror--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="image">Enter service Image</label>--}}
{{--                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter testimonial image">--}}
{{--                            <img src="{{asset('storage/testimonial-image/'.$service->image)}}" alt="" style="height: 300px; width: auto"/>--}}
{{--                        </div>--}}
{{--                        @error('image')--}}
{{--                        <span class="text-danger">{{$message}}</span>--}}
{{--                        @enderror--}}

{{--                        <br>--}}
{{--                        <button type="submit" class="btn btn-primary">Update</button>--}}
{{--                    </form>--}}
                </div>
            </div>

        </div>
    </div>


@endsection
