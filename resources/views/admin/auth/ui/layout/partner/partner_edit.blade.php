@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header" style="background-color: aquamarine">
                    <h2>Update Partner Info</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('partner.update',$partner->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $partner->id }}">

                        <div class="form-group">
                            <label for="image">Partner Logo</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter partner logo">
                            <img src="{{asset('storage/partner-image/'.$partner->image)}}" alt="" style="height: 300px; width: auto"/>
                        </div>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <div class="form-group">
                            <label for="value">Partner Link</label>
                            <input type="text" name="value" value="{{$partner->value}}" class="form-control" id="value" aria-describedby="value" placeholder="Enter partner info link">
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
