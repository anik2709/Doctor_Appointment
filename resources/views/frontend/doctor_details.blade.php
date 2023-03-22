@extends('frontend.layouts.master')

@section('body_content')

    <!-- hero section start  -->
    <section class="hero-area-2 doctor-details-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="details-head">
                        <div class="doctor-img">
                            <img src="{{asset('/storage/doctor-image/'.$singleDoctor->image)}}" alt="">
                        </div>
                        <div class="details-title">
                            <h4>{{$singleDoctor->name}}</h4>
                            <p>Add Category</p>
                            <span><i class="fa fa-phone-square" aria-hidden="true"></i>{{$singleDoctor->telephone}}</span>
                            <span><i class="fa fa-globe" aria-hidden="true"></i>{{$singleDoctor->website}}</span>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i>{{$singleDoctor->email}}</span>
{{--                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> 331 Park Ave S, New York, NY</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section start  -->


    <!-- blog section start  -->
    <section class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="doctor-details">
                        <div class="details-wrap">
                            <h4>{{$singleDoctor->name}}</h4>
                            <span></span>
                            <div class="doc-exp mb-10"> <p> <span>33 Years Experience Overall</span>  (33 years as specialist)</p></div>
                            <p>{{$singleDoctor->description}}</p>
{{--                            <p>{{\Illuminate\Support\Str::limit($singleDoctor->description, 200, '......')}}</p>--}}
                        </div>
{{--                        <div class="doc-payment">--}}
{{--                            <h4>Payment</h4>--}}
{{--                            <ul class="payemnt-title">--}}
{{--                                <li>Visit</li>--}}
{{--                                <li>Price</li>--}}
{{--                            </ul>--}}
{{--                            <ul class="payment-list">--}}
{{--                                <li>--}}
{{--                                    <div class="category">--}}
{{--                                        Individual therapy :--}}
{{--                                    </div>--}}
{{--                                    <div class="category-price">--}}
{{--                                        $10--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="category">--}}
{{--                                        Group therapy :--}}
{{--                                    </div>--}}
{{--                                    <div class="category-price">--}}
{{--                                        $20--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="category">--}}
{{--                                        Family therapy :--}}
{{--                                    </div>--}}
{{--                                    <div class="category-price">--}}
{{--                                        $40--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="category">--}}
{{--                                        Support groups :--}}
{{--                                    </div>--}}
{{--                                    <div class="category-price">--}}
{{--                                        $14--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="category">--}}
{{--                                        Intensive outpatient care :--}}
{{--                                    </div>--}}
{{--                                    <div class="category-price">--}}
{{--                                        $14--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="doc-education doc-payment">
                            <h4>Education</h4>
                            <ul class="university">
                                <li><span>MBBS - University of California </span> <span>2009</span></li>
                                <li><span>BDS - The Mind Research Foundation, Bangalore </span> <span>2011</span></li>
                                <li><span>BS - 115 Mill St, Belmont, MA 02478, United States </span> <span>2013</span></li>
                            </ul>
                        </div>
                        <div class="doc-education doc-payment">
                            <h4>Academic Awards</h4>
                            <ul class="university">
                                <li> <span>Highland Excellance Award</span> <span>2012-2014</span></li>
                                <li> <span>Reeds University Externam Scholarship</span> <span>2012-2014</span></li>
                                <li> <span>Homptan Millinium Award</span> <span>2012-2014</span></li>
                            </ul>
                        </div>
                        <div class="doc-education doc-payment">
                            <h4>Research Activity & Presentations</h4>
                            <ul class="university">
                                <li> <span>Assesent of Metabolism</span> <span>2012-2014</span></li>
                                <li> <span>Analysis of Bone Structure</span> <span>2012-2014</span></li>
                                <li> <span>Analysis of Heart & Body Supply</span> <span>2012-2014</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="blog-service-wrap">
                        <div class="category-title">
                            <h5>Servicing Hours</h5>
                        </div>
                        <div class="service-category doc-scheduce">
                            <ul class="week-time footer-time doc-time">
                                <li><span>Monday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Wednesday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Thursday:</span> <span>08.00 - 10.00</span></li>
                                <li><span>Saturday:</span> <span>10.00 - 05.00</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-service-wrap">
                        <div class="category-title">
                            <h5>Book an Appointment</h5>
                        </div>
                        <div class="service-category doc-appointment">
                            <div class="patient-category">
                                <button type="button" id="mine_btn" class="active">For Me</button>
                                <button type="button" id="other_btn">For Other</button>
                            </div>
                            <form action="#" class="apointment-form">
                                <div class="d-none for-others">
                                    <input id="name" type="text" placeholder="Patient Name">
                                    <input id="number" type="number" placeholder="Phone">
                                    <input id="email" type="email" placeholder="Email Address">
                                </div>
                                <input id="birth" type="text" placeholder="Date of Birth">
                                <select>
                                    <option value="disease-type">Disease type</option>
                                    <option value="anxiety">Anxiety Disorders</option>
                                </select>
                                <input type="text" placeholder="Appointment Date">
                                <textarea id="input-msg" placeholder="Massge"></textarea>
                                <button type="button" class="theme-btn book-btn">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end  -->

@endsection
