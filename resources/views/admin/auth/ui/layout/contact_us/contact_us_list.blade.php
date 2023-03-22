@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Contact Us</b></h2>
                </div>
                <div class="card-body">
                    {{--<h4 class="card-title">All Blog List</h4>--}}
                    <div class="div">

                        <a class="btn btn-primary" href="{{route('contact_us.create')}}" role="button">Add new contact</a>

                        <table class="table">
                            @if(\Illuminate\Support\Facades\Session:: has('success'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('success')}}
                                </div>
                            @endif
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Key</th>
                                <th scope="col">Value</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($contact_us_list as $contactuslist)

                                <tr>
                                    <td scope="row">{{$contactuslist->id}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($contactuslist->key)}}</td>

                                    <td>{{\Illuminate\Support\Str::limit($contactuslist->value)}}</td>


                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('contact_us.edit', ['id'=>$contactuslist->id])}}" class="btn btn-warning btn-sm-2 me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('contact_us.delete', ['id'=>$contactuslist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($contact_us_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $contact_us_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
