<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/sass/style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    @yield('style')

</head>


@include('frontend.layouts.header')
@yield('body_content')

{{--@include('frontend.layouts.testimonial')--}}


<!-- footer section start  -->
<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mb-30">
                <div class="footer-title">
                    <img src="{{ asset('frontend')}}/assets/images/logo.png" alt="">
                </div>
                <ul class="contact-details footer-info mt-50">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="detail">
                            <p>ADDRESS</p>
                            <p>121 Walked Street, NY, USA</p>
                        </div>
                    </li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="detail">
                            <p>PHONE</p>
                            <p>0800-123456, 0800-12389</p>
                        </div>
                    </li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="detail">
                            <p>EMAIL</p>
                            <p>medisch@example.com</p>
                        </div>
                    </li>
                </ul>
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-12 mb-30">
                <div class="footer-title">
                    <h5>Useful Links</h5>
                </div>
                <ul class="footer-widget">
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            About Us</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            Our Mission</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            Our Approch</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            Our History</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            Achievements</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            Careers</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            Appointment</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-12 mb-30">
                <div class="footer-title footer-schedule">
                    <h5>Days</h5>
                    <h5>Opening Hours</h5>
                </div>
                <ul class="week-time footer-time">
                    <li><span>Monday:</span> <span>08.00 - 10.00</span></li>
                    <li><span>Tuesday:</span> <span>08.00 - 10.00</span></li>
                    <li><span>Wednesday:</span> <span>08.00 - 10.00</span></li>
                    <li><span>Tuesday:</span> <span>08.00 - 10.00</span></li>
                    <li><span>Thursday:</span> <span>08.00 - 10.00</span></li>
                    <li><span>Friday:</span> <span>09.00 - 07.00</span></li>
                    <li><span>Saturday:</span> <span>10.00 - 05.00</span></li>
                </ul>
                <div class="news-letter">
                    <h5>Sign Up for Newsletter</h5>
                    <div class="letter-input">
                        <input type="email" placeholder="Enter Email Address">
                        <button type="submit" class="send-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end  -->

<script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery-plugin-collection.js"></script>
<script src="{{ asset('frontend') }}/assets/js/script.js"></script>

@yield('script')

</body>
</html>
