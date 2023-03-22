@extends('admin.auth.ui.layout.master_admin')

@section('body_content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container">

            <div class="card">
                <div class="card-header text-center" style="background-color: aquamarine">
                    <h2><b>Partner info list</b></h2>
                </div>
                <div class="card-body">
                    {{--                    <h4 class="card-title">All Blog List</h4>--}}
                    <div class="div">
                        <table class="table">
                            @if(\Illuminate\Support\Facades\Session:: has('success'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('success')}}
                                </div>
                            @endif
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Partner Logo</th>
                                <th scope="col">Partner Website Link</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($partner_list as $partnerlist)
                                <tr>
                                    <td scope="row">{{$partnerlist->id}}</td>
                                    <td>
                                        <img src="{{asset('storage/partner-image/'.$partnerlist->image)}}" alt="" style="height: 100px; width: auto"/>
                                    </td>

                                    <td>{{\Illuminate\Support\Str::limit($partnerlist->value)}}</td>

                                    <td>

                                        <div class="btn-group">
                                            <a href="{{route('partner.edit', ['id'=>$partnerlist->id])}}" class="btn btn-warning btn-sm me-1">
                                                <i  class="fa fa-edit" ></i>
                                            </a>

                                            <a href="{{route('partner.delete', ['id'=>$partnerlist->id])}}" class="btn btn-danger btn-sm">
                                                <i  class="fa fa-trash" ></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        @if ($partner_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $partner_list->links() }}
                            </div>
                        @endif

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
