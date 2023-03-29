@extends('frontend.layouts.master')

@section('body_content')

    <!-- contact us area start  -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="contact-info-wrap">
                        <li class="contact-info">
                            <div class="info-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="contact-way">
                                <p>Phone</p>
                                <span>{{getPhoneLink('Phone')}}</span>
                            </div>
                        </li>
                        <li class="contact-info">
                            <div class="info-icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="contact-way">
                                <p>Email</p>
                                <span>{{getEmailLink('Email')}}</span>
                            </div>
                        </li>
                        <li class="contact-info">
                            <div class="info-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="contact-way">
                                <p>Address</p>
                                <span>{{getAddressLink('Address')}}</span>
                                <span>{{getAddress2Link('Address2')}}</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="blog-service-wrap">
                        <div class="category-title">
                            <h5>Leave a Comment</h5>
                        </div>
                        <div class="service-category doc-appointment comment-section">
                            <form action="#" class="apointment-form comment-form">
                                <div class="field">
                                    <span class="name-field">
                                        <input id="name" type="text" placeholder="Name">
                                        <span class="field-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </span>
                                    <span class="name-field mail-field">
                                        <input id="email" type="email" placeholder="Email">
                                        <span class="field-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </span>
                                </div>
                                <textarea id="input-msg" placeholder="Enter Text"></textarea>
                                <div class="form-agreement">
                                    <i class="fa fa-spinner" aria-hidden="true"></i>
                                    <span>By using this form you agree with the storage and handling of our data by thiswebsite Privecy Policy.</span>
                                </div>
                                <button type="submit" class="hero-btn theme-btn mt-35">Post Comment
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us area end  -->


    <!-- map area start  -->
    <section class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24725.956123000953!2d-76.88496359376374!3d39.22596778934631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7df84aad610b1%3A0xf71c0779ece5c56c!2sWilde%20Lake%2C%20Columbia%2C%20MD%2021044%2C%20USA!5e0!3m2!1sen!2sbd!4v1678798572411!5m2!1sen!2sbd" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>display none</h5>
    </section>
    <!-- map area end  -->

@endsection
