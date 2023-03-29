@extends('frontend.layouts.master')

@section('body_content')

    <!-- blog section start  -->

    <section class="blog-area section-padding">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12">

                    <div class="row">

                        @foreach($allPosts as $post)

                            <div class="col-lg-6 col-md-6 col-12">

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

                    @if ($allPosts->hasPages())
                        <div class="pagination-wrapper">
                            {{ $allPosts->links() }}
                        </div>
                    @endif

{{--                    <ul class="pagination-list">--}}
{{--                        <li><a href="javascript:void(0)"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>--}}
{{--                        <li><a href="javascript:void(0)" class="active">1</a></li>--}}
{{--                        <li><a href="javascript:void(0)">2</a></li>--}}
{{--                        <li><a href="javascript:void(0)">3</a></li>--}}
{{--                        <li><a href="javascript:void(0)">4</a></li>--}}
{{--                        <li><a href="javascript:void(0)">5</a></li>--}}
{{--                        <li><i class="fa fa-ellipsis-h" aria-hidden="true"></i></li>--}}
{{--                        <li><a href="javascript:void(0)"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--                    </ul>--}}

                </div>

                <div class="col-lg-4 col-md-12 col-12">

                    <div class="blog-service-wrap">

                        <div class="category-title">
                            <h5>Search Keyword</h5>
                        </div>

                        <div class="service-category">

                            <div class="letter-input blog-input">
                                <input type="email" placeholder="Search">
                                <button type="submit" class="send-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </div>

                        </div>

                    </div>

                    <div class="blog-service-wrap">

                        <div class="category-title">
                            <h5>Categories</h5>
                        </div>

                        <div class="service-category">

                            <ul class="category-list">

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Cardiology</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Food</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Health</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Hospital</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Medical</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Cancer Cure</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Blood Bank</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Talented Doctors</a>
                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="blog-service-wrap">

                        <div class="category-title">
                            <h5>Archives</h5>
                        </div>

                        <div class="service-category">

                            <ul class="category-list">

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        December 2019</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        January 2020</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        February 2020</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        March 2020</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        April 2020</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        May 2020</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        June 2020</a>
                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="blog-service-wrap">

                        <div class="category-title">
                            <h5>Archives</h5>
                        </div>

                        <div class="service-category">

                            <ul class="category-list tag-list">
                                <li><a href="#"> Cardiology </a></li>
                                <li><a href="#"> Food </a></li>
                                <li><a href="#"> Health </a></li>
                                <li><a href="#"> Medical </a></li>
                                <li><a href="#"> Blood bank </a></li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- blog section end  -->

@endsection
