@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Add new partner</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('partner.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="image">Partner Logo</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter service image">
                        </div>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="value">Link</label>
                            <input class="form-control" name="value" id="value" >
                        </div>
                        @error('value')
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
