@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Contact Us</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('contact_us.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="key">Enter Key</label>
                            <input class="form-control" name="key" id="key" >
                        </div>
                        @error('key')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="value">Enter value</label>
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
