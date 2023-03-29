@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Category Info</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $category->id }}">

                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" id="name" aria-describedby="name" placeholder="Enter Category name">
                        </div>
                        @error('name')
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
