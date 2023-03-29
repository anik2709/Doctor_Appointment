@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Add New Doctor Profile</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>
                                <select name="category_id" class="form-control">
                                    <option value="disease-type">Doctor Category</option>
                                    @foreach($category as $doctorcategory)
                                        <option value="{{ $doctorcategory->id }}">{{$doctorcategory->category_name}}</option>
                                    @endforeach

                                </select>
                            </label>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="name">Doctor Name</label>
                            <input class="form-control" name="name" id="name" rows="3" placeholder="Enter doctor name">
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="email">Doctor Email</label>
                            <input class="form-control" name="email" id="email" rows="3" placeholder="Enter doctor email">
                        </div>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="telephone">Doctor Telephone</label>
                            <input class="form-control" name="telephone" id="telephone" rows="3" placeholder="Enter doctor telephone">
                        </div>
                        @error('telephone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="website">Doctor Website</label>
                            <input class="form-control" name="website" id="website" rows="3" placeholder="Enter doctor website">
                        </div>
                        @error('website')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="description">Doctor Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter doctor description"></textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="form-group">
                            <label for="image">Doctor Image</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter doctor image">
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
