<!-- header section start  -->

<header class="header-area">
    <div class="header-wrapper">
        <!-- header top area start  -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="header-social">
                        <div class="social-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i> <p>medisch@example.com </p>
                        </div>
                        <div class="social-right">
                            <ul class="socila-icon">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="{{route('admin.login')}}" class="login-btn theme-btn">Login/Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-second-top">
            <div class="container">
                <div class="row">
                    <div class="top-second">
                        <div class="logo-area">
                            <a href="{{route('home.page')}}"><img src="{{asset('frontend')}}/assets/images/logo.png" alt="Logo"></a>
                        </div>
                        <ul class="contact-details">
                            <li> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="detail">
                                    <p>121 Walked Street</p>
                                    <p>NY, USA</p>
                                </div>
                            </li>
                            <li> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="detail">
                                    <p>121 Walked Street</p>
                                    <p>NY, USA</p>
                                </div>
                            </li>
                            <li> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="detail">
                                    <p>121 Walked Street</p>
                                    <p>NY, USA</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end  -->

        <!-- menu area start  -->
        <div class="menu-area">

            <div class="container">

                <div class="row">

                    <div class="menu-section">

                        <a href="javascript:void(0)" class="mobile-btn"><i class="fa fa-bars" aria-hidden="true"></i></a>

                        <div class="responsive-menu">
                            <ul class="menu">

                                <li><a href="{{route('home.page')}}">Home</a> </li>

                                <li>
                                    <a href="{{route('about_us.page')}}">About Us</a>
                                </li>

                                <li>

                                    <a href="{{route('services.page')}}">Services <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                                    <ul class="submenu">
                                        <li><a href="{{route('services.page')}}">Service Details</a></li>
                                        <li><a href="{{route('doctor_list.page')}}">Doctor List</a></li>
{{--                                        <li><a href="{{route('doctor_details.page', $doctor->id)}}">Doctor Details</a></li>--}}
                                    </ul>

                                </li>

                                <li><a href="{{route('gallery.page')}}">Gallary</a></li>

                                <li><a href="{{route("blog.page")}}">Blog <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                                    <ul class="submenu">
                                        <li><a href="{{route("blog.page")}}">Blog Details</a></li>
                                    </ul>

                                </li>

                                <li><a href="contact.html">Contact Us</a></li>

                            </ul>
                        </div>
                        <div class="search-input">
                            <input type="search" placeholder="Search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blank-div"></div>
        <!-- menu area end  -->

    </div>
</header>

<!-- header section end  -->
