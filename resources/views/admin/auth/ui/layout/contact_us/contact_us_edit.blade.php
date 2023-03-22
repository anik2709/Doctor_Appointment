@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Contact Us</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('contact_us.update',$contactus->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $contactus->id }}">

                        <div class="form-group">
                            <label for="key">Enter Key</label>
                            <input type="text" name="key" value="{{$contactus->key}}" class="form-control" id="key" aria-describedby="key" placeholder="Enter contact us key">
                        </div>
                        @error('key')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="value">Enter Value</label>
                            <input type="text" name="value" value="{{$contactus->value}}" class="form-control" id="value" aria-describedby="value" placeholder="Enter service value">
                        </div>
                        @error('value')
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
