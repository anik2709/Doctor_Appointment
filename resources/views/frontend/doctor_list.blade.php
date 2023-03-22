@extends('frontend.layouts.master')

@section('body_content')

    <!-- hero section start  -->
    <section class="hero-area-2" style="background-image: url({{asset('frontend')}}/assets/images/hero/cover-02.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="hero-content-2">
                        <h4>Doctor List</h4>
                        <ul class="camp-link">
                            <li><a href="{{route('home.page')}}">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li>Doctor List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section start  -->

    <!-- team area start  -->
    <section class="team-area">
        <div class="container">
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="col-lg-3 col-md-6 col-sm-6">

                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{asset('/storage/doctor-image/'.$doctor->image)}}" alt="">
                                <div class="add-icon">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                                <div class="add-icon hover-show">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="member-name">
                                <h6><a href="{{route('doctor_details.page',$doctor->id)}}">{{$doctor->name}}</a></h6>
                                <p>Add Category</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                    <div class="row">
                        <div class="col-12 text-center mt-30 mb-30">
                            <a href="#" class="service-btn theme-btn" tabindex="0">Show More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    <!-- team area end   -->

@endsection
