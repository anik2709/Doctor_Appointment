@extends('frontend.layouts.master')

@section('body_content')

    <!-- service section start  -->
    <section class="service-area section-padding">
        <div class="container">
            <div class="row">

                <div class="section-title text-center">
                    <span>Our Services</span>
                    <h3>Special High-quality Services</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page when looking at its layout.</p>
                </div>

                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                                <div class="service-icon">
                                    <img src="{{asset('/storage/service-image/'.$service->image)}}" alt="">
                                </div>
                                <div class="service-details">
                                    <h4>{{$service->title}}</h4>
                                    <p>{{\Illuminate\Support\Str::limit($service->description, 100, '......')}}</p>
                                    <a href="#" class="service-btn theme-btn">Read More
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="like">
                                    <a href="javascript:void(0)"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
    <!-- service section end  -->

@endsection
