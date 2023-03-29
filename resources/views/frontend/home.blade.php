@extends('frontend.layouts.master')

@section('body_content')

    <!-- hero section start  -->
    <section class="hero-area" style="background-image: url({{ asset('frontend') }}/assets/images/hero/hero.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="hero-content">
                        <h4>We Are Here for You</h4>
                        <h2>Professional and Friendly <span>health Care </span>for You</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ipsam quaerat eligendi optio numquam architecto ipsum, temporibus aperiam similique laudantium.</p>
                        <a href="{{route('doctor_list.page')}}" class="hero-btn theme-btn">Book An Appointment now
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hero section start  -->

    <!-- help section start  -->
    <section class="help-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-6 mb-30">
                    <div class="help-wrap d-flex">
                        <div class="help-icon">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i></div>
                        <div class="help-details">
                            <p>Medical Counseling</p>
                            <span>It is long established fact that</span>
                        </div>
                        <h5>display none</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6 mb-30">
                    <div class="help-wrap d-flex">
                        <div class="help-icon">
                            <i class="fa fa-user-md" aria-hidden="true"></i>
                        </div>
                        <div class="help-details">
                            <p>Medical Counseling</p>
                            <span>It is long established fact that</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6 mb-30">
                    <div class="help-wrap d-flex">
                        <div class="help-icon">
                            <i class="fa fa-ambulance" aria-hidden="true"></i></div>
                        <div class="help-details">
                            <p>Medical Counseling</p>
                            <span>It is long established fact that</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- help section end  -->

    <!-- about us section start  -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-img">
                        <img src="{{ asset('frontend') }}/assets/images/about/01.jpg" alt="">
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
                        <p>{{\Illuminate\Support\Str::limit($aboutusdescription['About Us Description'], 300, '......')}}</p>
                        <a href="{{route('about_us.page')}}" class="about-btn theme-btn">Read More
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section end  -->

    <!-- service section start  -->
    <section class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <span>Our Services</span>
                    <h3>Special High-quality Services</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page when looking at its layout.</p>
                </div>
                <div class="active-service">
                    @foreach($services as $service)
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- service section end  -->

    <!-- emergency section start  -->
    <section class="emergency-area" style="background-image: url({{ asset('frontend') }}/assets/images/emegency/01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="emergency-contact">
                        <div class="contact-title">
                            <div class="title-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 682.667 682.667"  xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#fff" data-original="#fff"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M15 159.6h64.267v160.667H15ZM432.733 159.6H497v160.667h-64.267z" style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" fill="none" stroke="#fff" stroke-width="30" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#fff" class=""></path><path d="M0 0v0c0 97.605 79.128 176.733 176.733 176.733 97.606 0 176.734-79.128 176.734-176.733" style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(79.267 320.267)" fill="none" stroke="#fff" stroke-width="30" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#fff" class=""></path><path d="M0 0c17.753 0 32.134-14.396 32.134-32.133 0-17.738-14.381-32.134-32.134-32.134s-32.134 14.396-32.134 32.134C-32.134-14.396-17.753 0 0 0Z" style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 79.267)" fill="none" stroke="#fff" stroke-width="30" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#fff" class=""></path><path d="M0 0h32.133C94.23 0 144.6 50.353 144.6 112.467" style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(288.134 47.133)" fill="none" stroke="#fff" stroke-width="30" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#fff" class=""></path><path d="M0 0v144.6s-46.834-46.818-69.006-68.974A38.926 38.926 0 0 1-80.334 48.2h96.4" style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(360.434 175.667)" fill="none" stroke="#fff" stroke-width="30" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#fff" class=""></path><path d="M0 0v.016c0 10.652 4.258 20.862 11.729 28.39a40.213 40.213 0 0 0 28.438 11.761c22.172 0 40.166-17.979 40.166-40.167v-8.033S33.499-54.852 11.327-77.008A38.93 38.93 0 0 1 0-104.434h80.333" style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(143.533 280.1)" fill="none" stroke="#fff" stroke-width="30" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#fff" class=""></path></g></g></svg>
                            </div>
                            <h5>Emergency medical Care 24/7</h5>
                        </div>
                        <div class="contact-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, ut?</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, magnam. Facilis totam ducimus deserunt repudiandae sapiente, magnam dolorem.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nemo!</p>
                            <div class="contact-phone">
                                <div class="phone-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M477.769 315.817A410.757 410.757 0 0 1 361.332 285.2a38.187 38.187 0 0 0-40.3 6.289l-36.25 31.395a5.979 5.979 0 0 1-6.6 1.122c-44.686-17.683-72.5-45.495-90.183-90.184a5.982 5.982 0 0 1 1.124-6.6l31.394-36.249a38.194 38.194 0 0 0 6.289-40.3 410.834 410.834 0 0 1-30.624-116.442A38.288 38.288 0 0 0 154.866.126L36.871 9.643A38.34 38.34 0 0 0 1.642 44.711c-5.58 65.48 2.922 129.183 25.272 189.338a423.2 423.2 0 0 0 98.145 152.893 423.192 423.192 0 0 0 152.893 98.145 430.181 430.181 0 0 0 150.577 26.932q19.259 0 38.76-1.661a38.34 38.34 0 0 0 35.068-35.229l9.517-117.995a38.275 38.275 0 0 0-34.105-41.317zm2.209 38.745-9.518 118a6.286 6.286 0 0 1-5.888 5.917c-118.726 10.113-234.219-31.499-316.886-114.164S23.409 166.147 33.526 47.428a6.287 6.287 0 0 1 5.917-5.889l117.995-9.517c.171-.013.341-.02.511-.02a6.511 6.511 0 0 1 6.427 5.747 442.8 442.8 0 0 0 33 125.5 6.033 6.033 0 0 1-1.056 6.767l-31.393 36.248a37.848 37.848 0 0 0-6.69 39.33c20.923 52.872 55.292 87.241 108.163 108.162a37.841 37.841 0 0 0 39.329-6.688l36.249-31.394a6.035 6.035 0 0 1 6.767-1.056 442.813 442.813 0 0 0 125.5 33 6.505 6.505 0 0 1 5.733 6.944zM390.294 0A121.706 121.706 0 1 0 512 121.706 121.844 121.844 0 0 0 390.294 0zm0 211.412A89.706 89.706 0 1 1 480 121.706a89.808 89.808 0 0 1-89.706 89.706zm67.774-89.706a16 16 0 0 1-16 16h-35.774v35.774a16 16 0 1 1-32 0v-35.774H338.52a16 16 0 0 1 0-32h35.774V69.932a16 16 0 0 1 32 0v35.774h35.774a16 16 0 0 1 16 16z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                                </div>
                                <h5>+88 28624 79555</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- emergency section end  -->

    <!-- team area start  -->
    <section class="team-area">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <span>Our Team</span>
                    <h3>Our Dedicated Doctors</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page when looking at its layout.</p>
                </div>
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
                                <p>{{$doctor->category->category_name}}</p>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team area end   -->

    <!-- testimoni section start  -->
    <section class="testimoni-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title mb-45">
                    <span>Testimonial</span>
                    <h3>What Our Clints Say</h3>
                </div>
                <div class="active-testimoni">
                    @foreach($testimonials as $testimonial)
                        <div class="single-testimoni">
                            <ul class="rating d-flex">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="authore-content">
                                <p>{{\Illuminate\Support\Str::limit($testimonial->description, 200, '......')}}</p>
                                <h5 class="authore">- {{$testimonial -> name}}</h5>
                            </div>
                            <div class="authore-img">
                                <img src="{{asset('/storage/testimonial-image/'.$testimonial->image)}}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- testimoni section end  -->

    <!-- blog section start  -->
    <section class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title text-center mb-50">
                    <span>Our Blog</span>
                    <h3>Our Latest News</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page when looking at its layout.</p>
                </div>
                @foreach($allPosts as $post)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="#"><img src="{{asset('/storage/post-image/'.$post->image)}}" alt=""></a>
                                <div class="blog-tag">
                                    <span>{{\Carbon\Carbon::parse($post->created_at)->format('d')}}</span>
                                    <span>{{\Carbon\Carbon::parse($post->created_at)->format('M')}}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h6 class="blog-title">
                                    <a href="#">{{$post->title}}</a>
                                </h6>
                                <ul class="blog-authore">
                                    <li>
                                        <i class="fa fa-user" aria-hidden="true"></i> {{$post->users->full_name}}
                                    </li>
                                    <li>Date: {{\Carbon\Carbon::parse(($post->created_at))->format('d.m.Y')}}</li>
                                </ul>
                                <p>{{\Illuminate\Support\Str::limit($post->description, 200, '......')}}</p>
                                <a href="{{route('blog_details.page',$post->id)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog section end  -->

    <!-- counter section start  -->
    <section class="counter-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="single-count">
                        <div class="counter-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 16.933 16.933"  xml:space="preserve" class=""><g><path d="M9.525 3.704A3.179 3.179 0 0 0 6.35.529a3.179 3.179 0 0 0-3.166 3.444c.015.36.557.326.528-.033a3.838 3.838 0 0 1-.008-.236 2.642 2.642 0 0 1 2.645-2.646 2.642 2.642 0 0 1 2.646 2.646c0 .327-.044.684-.129 1.054a.96.96 0 0 0-.136.025v-.285a.265.265 0 0 0-.263-.266h-.53c-.598 0-.808-.611-.808-.611a.264.264 0 0 0-.502 0s-.211.61-.807.61H4.232a.265.265 0 0 0-.263.267v.283c-.53-.129-1.059.242-1.059.77 0 .774.545 1.259 1.192 1.32.134.385.364.723.66.989v1.4c0 .029.005.057.014.084.246.608.826.975 1.575.975.748 0 1.33-.369 1.574-.975a.265.265 0 0 0 .014-.083v-1.4c.296-.265.527-.603.66-.988.612-.062 1.19-.53 1.19-1.322a.806.806 0 0 0-.406-.675c.091-.4.142-.797.142-1.172zm2.116-1.852v.264h-.263a.8.8 0 0 0-.795.795v1.851a2.909 2.909 0 0 0 2.646 2.897v3.719a.785.785 0 0 1-.793.792h-.279a3.436 3.436 0 0 0-3.426-3.175c-.357-.005-.357.535 0 .53a2.896 2.896 0 0 1 2.897 2.645h-2.67a1.058 1.058 0 0 0-1.02-.792c-.58 0-1.058.475-1.058 1.056s.477 1.059 1.059 1.059c.489 0 .9-.34 1.018-.793h3.48c.728 0 1.322-.594 1.322-1.322V7.659a2.91 2.91 0 0 0 2.646-2.897v-1.85a.8.8 0 0 0-.795-.796h-.264v-.264c0-.36-.529-.358-.529 0v1.06c.008.344.522.344.53 0v-.267h.263a.26.26 0 0 1 .266.266v1.851a2.372 2.372 0 0 1-2.383 2.381 2.37 2.37 0 0 1-2.381-2.38V2.91a.26.26 0 0 1 .266-.266h.263v.266c0 .353.53.353.53 0V1.852c0-.35-.53-.363-.53 0zM6.88 4.235c.168.226.507.526 1.058.526h.264v1.325c0 1.03-.821 1.851-1.852 1.851-1.03 0-1.852-.82-1.852-1.851V4.76h1.323c.551 0 .869-.288 1.059-.526zm1.84 2.076c.02-.307.01-.618.01-.936.198-.203.53-.029.528.187-.002.398-.242.662-.538.749zm-4.74 0a.75.75 0 0 1-.538-.749c0-.261.37-.364.527-.188-.002.305-.004.647.012.937zm1.312 1.908a2.381 2.381 0 0 0 2.117 0v.977s-.22.594-1.058.594c-.839 0-1.06-.594-1.06-.594zm-1.323.776a3.438 3.438 0 0 0-3.44 3.44v3.704c0 .146.119.265.265.265h11.112a.265.265 0 0 0 .265-.265v-2.646c.005-.357-.534-.357-.53 0v.795H10.32v-.795c0-.375-.529-.345-.529 0v2.382H2.91v-2.382c0-.357-.528-.358-.528 0v.795H1.058v-1.853a2.898 2.898 0 0 1 2.91-2.91c.358.005.358-.534 0-.53zm3.97 2.91c.295 0 .529.234.529.529 0 .295-.234.53-.53.53a.526.526 0 0 1-.53-.53c0-.295.235-.53.53-.53zm-6.88 2.912h1.323v1.058H1.058zm9.26 0h1.323v1.058h-1.323z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                        </div>
                        <h3><span class="odometer" data-count="{{getHappyPatientsLink('Happy Patients')}}">00</span></h3>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="single-count">
                        <div class="counter-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 16.933 16.933"  xml:space="preserve" class=""><g><path d="M9.525 3.704A3.179 3.179 0 0 0 6.35.529a3.179 3.179 0 0 0-3.166 3.444c.015.36.557.326.528-.033a3.838 3.838 0 0 1-.008-.236 2.642 2.642 0 0 1 2.645-2.646 2.642 2.642 0 0 1 2.646 2.646c0 .327-.044.684-.129 1.054a.96.96 0 0 0-.136.025v-.285a.265.265 0 0 0-.263-.266h-.53c-.598 0-.808-.611-.808-.611a.264.264 0 0 0-.502 0s-.211.61-.807.61H4.232a.265.265 0 0 0-.263.267v.283c-.53-.129-1.059.242-1.059.77 0 .774.545 1.259 1.192 1.32.134.385.364.723.66.989v1.4c0 .029.005.057.014.084.246.608.826.975 1.575.975.748 0 1.33-.369 1.574-.975a.265.265 0 0 0 .014-.083v-1.4c.296-.265.527-.603.66-.988.612-.062 1.19-.53 1.19-1.322a.806.806 0 0 0-.406-.675c.091-.4.142-.797.142-1.172zm2.116-1.852v.264h-.263a.8.8 0 0 0-.795.795v1.851a2.909 2.909 0 0 0 2.646 2.897v3.719a.785.785 0 0 1-.793.792h-.279a3.436 3.436 0 0 0-3.426-3.175c-.357-.005-.357.535 0 .53a2.896 2.896 0 0 1 2.897 2.645h-2.67a1.058 1.058 0 0 0-1.02-.792c-.58 0-1.058.475-1.058 1.056s.477 1.059 1.059 1.059c.489 0 .9-.34 1.018-.793h3.48c.728 0 1.322-.594 1.322-1.322V7.659a2.91 2.91 0 0 0 2.646-2.897v-1.85a.8.8 0 0 0-.795-.796h-.264v-.264c0-.36-.529-.358-.529 0v1.06c.008.344.522.344.53 0v-.267h.263a.26.26 0 0 1 .266.266v1.851a2.372 2.372 0 0 1-2.383 2.381 2.37 2.37 0 0 1-2.381-2.38V2.91a.26.26 0 0 1 .266-.266h.263v.266c0 .353.53.353.53 0V1.852c0-.35-.53-.363-.53 0zM6.88 4.235c.168.226.507.526 1.058.526h.264v1.325c0 1.03-.821 1.851-1.852 1.851-1.03 0-1.852-.82-1.852-1.851V4.76h1.323c.551 0 .869-.288 1.059-.526zm1.84 2.076c.02-.307.01-.618.01-.936.198-.203.53-.029.528.187-.002.398-.242.662-.538.749zm-4.74 0a.75.75 0 0 1-.538-.749c0-.261.37-.364.527-.188-.002.305-.004.647.012.937zm1.312 1.908a2.381 2.381 0 0 0 2.117 0v.977s-.22.594-1.058.594c-.839 0-1.06-.594-1.06-.594zm-1.323.776a3.438 3.438 0 0 0-3.44 3.44v3.704c0 .146.119.265.265.265h11.112a.265.265 0 0 0 .265-.265v-2.646c.005-.357-.534-.357-.53 0v.795H10.32v-.795c0-.375-.529-.345-.529 0v2.382H2.91v-2.382c0-.357-.528-.358-.528 0v.795H1.058v-1.853a2.898 2.898 0 0 1 2.91-2.91c.358.005.358-.534 0-.53zm3.97 2.91c.295 0 .529.234.529.529 0 .295-.234.53-.53.53a.526.526 0 0 1-.53-.53c0-.295.235-.53.53-.53zm-6.88 2.912h1.323v1.058H1.058zm9.26 0h1.323v1.058h-1.323z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                        </div>
                        <h3><span class="odometer" data-count="{{getHospitalRoomsLink('Hospital Rooms')}}">00</span></h3>
                        <p>Hospital Rooms</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="single-count">
                        <div class="counter-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 16.933 16.933"  xml:space="preserve" class=""><g><path d="M9.525 3.704A3.179 3.179 0 0 0 6.35.529a3.179 3.179 0 0 0-3.166 3.444c.015.36.557.326.528-.033a3.838 3.838 0 0 1-.008-.236 2.642 2.642 0 0 1 2.645-2.646 2.642 2.642 0 0 1 2.646 2.646c0 .327-.044.684-.129 1.054a.96.96 0 0 0-.136.025v-.285a.265.265 0 0 0-.263-.266h-.53c-.598 0-.808-.611-.808-.611a.264.264 0 0 0-.502 0s-.211.61-.807.61H4.232a.265.265 0 0 0-.263.267v.283c-.53-.129-1.059.242-1.059.77 0 .774.545 1.259 1.192 1.32.134.385.364.723.66.989v1.4c0 .029.005.057.014.084.246.608.826.975 1.575.975.748 0 1.33-.369 1.574-.975a.265.265 0 0 0 .014-.083v-1.4c.296-.265.527-.603.66-.988.612-.062 1.19-.53 1.19-1.322a.806.806 0 0 0-.406-.675c.091-.4.142-.797.142-1.172zm2.116-1.852v.264h-.263a.8.8 0 0 0-.795.795v1.851a2.909 2.909 0 0 0 2.646 2.897v3.719a.785.785 0 0 1-.793.792h-.279a3.436 3.436 0 0 0-3.426-3.175c-.357-.005-.357.535 0 .53a2.896 2.896 0 0 1 2.897 2.645h-2.67a1.058 1.058 0 0 0-1.02-.792c-.58 0-1.058.475-1.058 1.056s.477 1.059 1.059 1.059c.489 0 .9-.34 1.018-.793h3.48c.728 0 1.322-.594 1.322-1.322V7.659a2.91 2.91 0 0 0 2.646-2.897v-1.85a.8.8 0 0 0-.795-.796h-.264v-.264c0-.36-.529-.358-.529 0v1.06c.008.344.522.344.53 0v-.267h.263a.26.26 0 0 1 .266.266v1.851a2.372 2.372 0 0 1-2.383 2.381 2.37 2.37 0 0 1-2.381-2.38V2.91a.26.26 0 0 1 .266-.266h.263v.266c0 .353.53.353.53 0V1.852c0-.35-.53-.363-.53 0zM6.88 4.235c.168.226.507.526 1.058.526h.264v1.325c0 1.03-.821 1.851-1.852 1.851-1.03 0-1.852-.82-1.852-1.851V4.76h1.323c.551 0 .869-.288 1.059-.526zm1.84 2.076c.02-.307.01-.618.01-.936.198-.203.53-.029.528.187-.002.398-.242.662-.538.749zm-4.74 0a.75.75 0 0 1-.538-.749c0-.261.37-.364.527-.188-.002.305-.004.647.012.937zm1.312 1.908a2.381 2.381 0 0 0 2.117 0v.977s-.22.594-1.058.594c-.839 0-1.06-.594-1.06-.594zm-1.323.776a3.438 3.438 0 0 0-3.44 3.44v3.704c0 .146.119.265.265.265h11.112a.265.265 0 0 0 .265-.265v-2.646c.005-.357-.534-.357-.53 0v.795H10.32v-.795c0-.375-.529-.345-.529 0v2.382H2.91v-2.382c0-.357-.528-.358-.528 0v.795H1.058v-1.853a2.898 2.898 0 0 1 2.91-2.91c.358.005.358-.534 0-.53zm3.97 2.91c.295 0 .529.234.529.529 0 .295-.234.53-.53.53a.526.526 0 0 1-.53-.53c0-.295.235-.53.53-.53zm-6.88 2.912h1.323v1.058H1.058zm9.26 0h1.323v1.058h-1.323z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                        </div>
                        <h3><span class="odometer" data-count="{{getAwardWinLink('Award Win')}}">00</span></h3>
                        <p>Award Win</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="single-count">
                        <div class="counter-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 16.933 16.933"  xml:space="preserve" class=""><g><path d="M9.525 3.704A3.179 3.179 0 0 0 6.35.529a3.179 3.179 0 0 0-3.166 3.444c.015.36.557.326.528-.033a3.838 3.838 0 0 1-.008-.236 2.642 2.642 0 0 1 2.645-2.646 2.642 2.642 0 0 1 2.646 2.646c0 .327-.044.684-.129 1.054a.96.96 0 0 0-.136.025v-.285a.265.265 0 0 0-.263-.266h-.53c-.598 0-.808-.611-.808-.611a.264.264 0 0 0-.502 0s-.211.61-.807.61H4.232a.265.265 0 0 0-.263.267v.283c-.53-.129-1.059.242-1.059.77 0 .774.545 1.259 1.192 1.32.134.385.364.723.66.989v1.4c0 .029.005.057.014.084.246.608.826.975 1.575.975.748 0 1.33-.369 1.574-.975a.265.265 0 0 0 .014-.083v-1.4c.296-.265.527-.603.66-.988.612-.062 1.19-.53 1.19-1.322a.806.806 0 0 0-.406-.675c.091-.4.142-.797.142-1.172zm2.116-1.852v.264h-.263a.8.8 0 0 0-.795.795v1.851a2.909 2.909 0 0 0 2.646 2.897v3.719a.785.785 0 0 1-.793.792h-.279a3.436 3.436 0 0 0-3.426-3.175c-.357-.005-.357.535 0 .53a2.896 2.896 0 0 1 2.897 2.645h-2.67a1.058 1.058 0 0 0-1.02-.792c-.58 0-1.058.475-1.058 1.056s.477 1.059 1.059 1.059c.489 0 .9-.34 1.018-.793h3.48c.728 0 1.322-.594 1.322-1.322V7.659a2.91 2.91 0 0 0 2.646-2.897v-1.85a.8.8 0 0 0-.795-.796h-.264v-.264c0-.36-.529-.358-.529 0v1.06c.008.344.522.344.53 0v-.267h.263a.26.26 0 0 1 .266.266v1.851a2.372 2.372 0 0 1-2.383 2.381 2.37 2.37 0 0 1-2.381-2.38V2.91a.26.26 0 0 1 .266-.266h.263v.266c0 .353.53.353.53 0V1.852c0-.35-.53-.363-.53 0zM6.88 4.235c.168.226.507.526 1.058.526h.264v1.325c0 1.03-.821 1.851-1.852 1.851-1.03 0-1.852-.82-1.852-1.851V4.76h1.323c.551 0 .869-.288 1.059-.526zm1.84 2.076c.02-.307.01-.618.01-.936.198-.203.53-.029.528.187-.002.398-.242.662-.538.749zm-4.74 0a.75.75 0 0 1-.538-.749c0-.261.37-.364.527-.188-.002.305-.004.647.012.937zm1.312 1.908a2.381 2.381 0 0 0 2.117 0v.977s-.22.594-1.058.594c-.839 0-1.06-.594-1.06-.594zm-1.323.776a3.438 3.438 0 0 0-3.44 3.44v3.704c0 .146.119.265.265.265h11.112a.265.265 0 0 0 .265-.265v-2.646c.005-.357-.534-.357-.53 0v.795H10.32v-.795c0-.375-.529-.345-.529 0v2.382H2.91v-2.382c0-.357-.528-.358-.528 0v.795H1.058v-1.853a2.898 2.898 0 0 1 2.91-2.91c.358.005.358-.534 0-.53zm3.97 2.91c.295 0 .529.234.529.529 0 .295-.234.53-.53.53a.526.526 0 0 1-.53-.53c0-.295.235-.53.53-.53zm-6.88 2.912h1.323v1.058H1.058zm9.26 0h1.323v1.058h-1.323z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                        </div>
                        <h3><span class="odometer" data-count="{{getAmbulanceLink('Ambulance')}}">00</span></h3>
                        <p>Ambulance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter section end   -->

    <!-- Partner section start -->
    <section class="brand-area section-padding">
        <div class="container">
            <div class="row">
                    <div class="brand-active">
                        @foreach($partners as $partner)
                            <div class="brand-img">
                                <a href="{{$partner->value}}"><img src="{{asset('/storage/partner-image/'.$partner->image)}}" alt=""></a>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
        <h5>display none</h5>
    </section>
    <!-- Partner section end -->

@endsection
