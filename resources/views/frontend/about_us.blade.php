@extends('frontend.layouts.master')

@section('body_content')

    <!-- about us section start  -->
    <section class="about-area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-img">
                        <img src="{{asset('frontend')}}/assets/images/about/01.jpg" alt="">
                        <div class="open-schedule">
                            <p class="title">Open Hours</p>
                            <ul class="week-time">
                                <li><span>Monday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Tuesday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Wednesday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Tuesday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Thursday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Friday:</span> <span>09.00 - 07.00</span></li>
                                <li><span>Saturday:</span> <span>10.00 - 05.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <span>About Us</span>
                        <h3>{{$aboutustitle['About Us Title']}}</h3>
                    </div>
                    <div class="about-content">
                        <p>{{$aboutusdescription['About Us Description']}} </p>
{{--                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni cupiditate aperiam maxime, odit porro praesentium!</p>--}}
{{--                        <a href="#" class="about-btn theme-btn">Read More--}}
{{--                            <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section end  -->

@endsection
