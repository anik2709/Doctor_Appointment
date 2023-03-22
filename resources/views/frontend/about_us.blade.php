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
                        <h3>Professional Health and medical Care in Full Measure</h3>
                    </div>
                    <div class="about-content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, quis ipsa. A quod totam quibusdam ipsum aliquam tempora natus nesciunt fuga qui, atque non at voluptate in soluta ratione, praesentium, quos repellendus nulla similique magni labore iste quae saepe. Corrupti, et quas? Vel obcaecati mollitia velit nulla quod in culpa.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni cupiditate aperiam maxime, odit porro praesentium!</p>
                        <a href="#" class="about-btn theme-btn">Read More
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section end  -->

@endsection
