@extends('website.layouts.app')
{{-- @section('title','') --}}
<!-- Slider Start -->
@section('slider')
    <div class="section slider-section">

        <!-- Slider Shape Start -->
        <div class="slider-shape">
            <img class="shape-1 animation-round" src="{{website_assets('assets/images/shape/shape-8.png')}}" alt="Shape">
        </div>
        <!-- Slider Shape End -->

        <div class="container">

            <!-- Slider Content Start -->
            <div class="slider-content">
                <h4 class="sub-title">Start your favourite course</h4>
                <h2 class="main-title">Now learning from anywhere, and build your <span>bright career.</span></h2>
                <p>It has survived not only five centuries but also the leap into electronic typesetting.</p>
                <a class="btn btn-primary btn-hover-dark" href="#">Start A Course</a>
            </div>
            <!-- Slider Content End -->

        </div>

        <!-- Slider Courses Box Start -->
        <div class="slider-courses-box">

            <img class="shape-1 animation-left" src="{{website_assets('assets/images/shape/shape-5.png')}}" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-open-book"></i>
                    <span class="count">1,235</span>
                    <p>courses</p>
                </div>
            </div>

            <img class="shape-2" src="{{website_assets('assets/images/shape/shape-6.png')}}" alt="Shape">

        </div>
        <!-- Slider Courses Box End -->

        <!-- Slider Rating Box Start -->
        <div class="slider-rating-box">

            <div class="box-rating">
                <div class="box-wrapper">
                    <span class="count">4.8 <i class="flaticon-star"></i></span>
                    <p>Rating (86K)</p>
                </div>
            </div>

            <img class="shape animation-up" src="{{asset('website_assets/')}}/assets/images/shape/shape-7.png" alt="Shape">

        </div>
        <!-- Slider Rating Box End -->

        <!-- Slider Images Start -->
        <div class="slider-images">
            <div class="images">
                <img src="{{asset('website_assets/')}}/assets/images/slider/slider-1.png" alt="Slider">
            </div>
        </div>
        <!-- Slider Images End -->

        <!-- Slider Video Start -->
        <div class="slider-video">
            <img class="shape-1" src="{{asset('website_assets/')}}/assets/images/shape/shape-9.png" alt="Shape">

            <div class="video-play">
                <img src="{{asset('website_assets/')}}/assets/images/shape/shape-10.png" alt="Shape">
                <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i class="flaticon-play"></i></a>
            </div>
        </div>
        <!-- Slider Video End -->

    </div>
@endsection
<!-- Slider End -->

<!-- All Courses Start -->
@section('allCourses')
    <div class="section section-padding-02">
        <div class="container">

            <!-- All Courses Top Start -->
            <div class="courses-top">

                <!-- Section Title Start -->
                <div class="section-title shape-01">
                    <h2 class="main-title">All <span>Courses</span> of Edule</h2>
                </div>
                <!-- Section Title End -->

                <!-- Courses Search Start -->
                <div class="courses-search">
                    <form action="{{route('user.welcome.search')}}" method="GET">
                        @csrf
                        <input type="text" name="search" placeholder="Search your course">
                        <button><i class="flaticon-magnifying-glass"></i></button>
                    </form>
                </div>
                <!-- Courses Search End -->

            </div>
            <!-- All Courses Top End -->

            <!-- All Courses Tabs Menu Start -->
            <div class="courses-tabs-menu courses-active">
                <div class="swiper-container">
                    <ul class="swiper-wrapper nav">
                         @foreach ($subjects as $subject )
                        <li class="swiper-slide"><button  data-bs-toggle="tab" data-bs-target="#tabs{{$subject->id}}">{{$subject->name}}</button></li>

                        @endforeach
                    </ul>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
            </div>
            <!-- All Courses Tabs Menu End -->


            <!-- All Courses tab content Start -->
            <div class="tab-content courses-tab-content">

               @include('website.includes.courses_random')
               @include('website.includes.courses_tab')

            </div>

            <!-- All Courses tab content End -->

            <!-- All Courses BUtton Start -->
            <div class="courses-btn text-center">
                <a href="{{route('user.welcome.courses')}}" class="btn btn-secondary btn-hover-primary">Other Course</a>
            </div>
            <!-- All Courses BUtton End -->

        </div>
    </div>
@endsection
<!-- All Courses End -->

<!-- Call to Action Start -->
@section('callInstractor')
<div class="section section-padding-02">
    <div class="container">

        <!-- Call to Action Wrapper Start -->
        <div class="call-to-action-wrapper">

            <img class="cat-shape-01 animation-round" src="{{asset('website_assets/')}}/assets/images/shape/shape-12.png" alt="Shape">
            <img class="cat-shape-02" src="{{asset('website_assets/')}}/assets/images/shape/shape-13.svg" alt="Shape">
            <img class="cat-shape-03 animation-round" src="{{asset('website_assets/')}}/assets/images/shape/shape-12.png" alt="Shape">

            <div class="row align-items-center">
                <div class="col-md-6">

                    <!-- Section Title Start -->
                    <div class="section-title shape-02">
                        <h5 class="sub-title">Become A Instructor</h5>
                        <h2 class="main-title">You can join with Edule as <span>a instructor?</span></h2>
                    </div>
                    <!-- Section Title End -->

                </div>
                <div class="col-md-6">
                    <div class="call-to-action-btn">
                        <a class="btn btn-primary btn-hover-dark" href="contact.html">Drop Information</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action Wrapper End -->

    </div>
</div>
@endsection
<!-- Call to Action End -->

 <!-- How It Work End -->
@section('howWork')
    @include('website.includes.howWork')
@endsection
 <!-- How It Work End -->

<!-- Testimonial End -->
@section('feedback')
    <div class="section section-padding-02 mt-n1">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape-03 text-center">
                <h5 class="sub-title">Student Testimonial</h5>
                <h2 class="main-title">Feedback From <span> Student</span></h2>
            </div>
            <!-- Section Title End -->

            <!-- Testimonial Wrapper End -->
            <div class="testimonial-wrapper testimonial-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial swiper-slide">
                            <div class="testimonial-author">
                                <div class="author-thumb">
                                    <img src="{{asset('website_assets/')}}/assets/images/author/author-06.jpg" alt="Author">

                                    <i class="icofont-quote-left"></i>
                                </div>

                                <span class="rating-star">
                                        <span class="rating-bar" style="width: 80%;"></span>
                                </span>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                                <h4 class="name">Sara Alexander</h4>
                                <span class="designation">Product Designer, USA</span>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->

                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial swiper-slide">
                            <div class="testimonial-author">
                                <div class="author-thumb">
                                    <img src="{{asset('website_assets/')}}/assets/images/author/author-07.jpg" alt="Author">

                                    <i class="icofont-quote-left"></i>
                                </div>

                                <span class="rating-star">
                                        <span class="rating-bar" style="width: 80%;"></span>
                                </span>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                                <h4 class="name">Melissa Roberts</h4>
                                <span class="designation">Product Designer, USA</span>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->

                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial swiper-slide">
                            <div class="testimonial-author">
                                <div class="author-thumb">
                                    <img src="{{asset('website_assets/')}}/assets/images/author/author-03.jpg" alt="Author">

                                    <i class="icofont-quote-left"></i>
                                </div>

                                <span class="rating-star">
                                        <span class="rating-bar" style="width: 80%;"></span>
                                </span>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                                <h4 class="name">Sara Alexander</h4>
                                <span class="designation">Product Designer, USA</span>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Testimonial Wrapper End -->

        </div>
    </div>
@endsection
<!-- Testimonial End -->

<!-- Brand Logo Start -->
@section('brandLogo')
    <div class="section section-padding-02">
        <div class="container">

            <!-- Brand Logo Wrapper Start -->
            <div class="brand-logo-wrapper">

                <img class="shape-1" src="{{asset('website_assets/')}}/assets/images/shape/shape-19.png" alt="Shape">

                <img class="shape-2 animation-round" src="{{asset('website_assets/')}}/assets/images/shape/shape-20.png" alt="Shape">

                <!-- Section Title Start -->
                <div class="section-title shape-03">
                    <h2 class="main-title">Best Supporter of <span> Edule.</span></h2>
                </div>
                <!-- Section Title End -->

                <!-- Brand Logo Start -->
                <div class="brand-logo brand-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{asset('website_assets/')}}/assets/images/brand/brand-01.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{asset('website_assets/')}}/assets/images/brand/brand-02.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{asset('website_assets/')}}/assets/images/brand/brand-03.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{asset('website_assets/')}}/assets/images/brand/brand-04.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{asset('website_assets/')}}/assets/images/brand/brand-05.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{asset('website_assets/')}}/assets/images/brand/brand-06.png" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                    </div>
                </div>
                <!-- Brand Logo End -->

            </div>
            <!-- Brand Logo Wrapper End -->

        </div>
    </div>
@endsection
<!-- Brand Logo End -->

<!-- Blog Start -->
@section('blogStart')
    <div class="section section-padding mt-n1">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape-03 text-center">
                <h5 class="sub-title">Latest News</h5>
                <h2 class="main-title">Educational Tips & <span> Tricks</span></h2>
            </div>
            <!-- Section Title End -->

            <!-- Blog Wrapper Start -->
            <div class="blog-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details-left-sidebar.html"><img src="{{asset('website_assets/')}}/assets/images/blog/blog-01.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="{{asset('website_assets/')}}/assets/images/author/author-01.jpg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <a class="name" href="#">Jason Williams</a>
                                        </div>
                                    </div>
                                    <div class="tag">
                                        <a href="#">Science</a>
                                    </div>
                                </div>

                                <h4 class="title"><a href="blog-details-left-sidebar.html">Data Science and Machine Learning with Python - Hands On!</a></h4>

                                <div class="blog-meta">
                                    <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                    <span> <i class="icofont-heart"></i> 2,568+ </span>
                                </div>

                                <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details-left-sidebar.html"><img src="{{asset('website_assets/')}}/assets/images/blog/blog-02.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="{{asset('website_assets/')}}/assets/images/author/author-02.jpg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <a class="name" href="#">Pamela Foster</a>
                                        </div>
                                    </div>
                                    <div class="tag">
                                        <a href="#">UX Design</a>
                                    </div>
                                </div>

                                <h4 class="title"><a href="blog-details-left-sidebar.html">Create Amazing Color Schemes for Your UX Design Projects</a></h4>

                                <div class="blog-meta">
                                    <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                    <span> <i class="icofont-heart"></i> 2,568+ </span>
                                </div>

                                <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details-left-sidebar.html"><img src="{{asset('website_assets/')}}/assets/images/blog/blog-03.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <div class="author">
                                        <div class="author-thumb">
                                            <a href="#"><img src="{{asset('website_assets/')}}/assets/images/author/author-03.jpg" alt="Author"></a>
                                        </div>
                                        <div class="author-name">
                                            <a class="name" href="#">Patricia Collins</a>
                                        </div>
                                    </div>
                                    <div class="tag">
                                        <a href="#">Business</a>
                                    </div>
                                </div>

                                <h4 class="title"><a href="blog-details-left-sidebar.html">Culture & Leadership: Strategies for a Successful Business</a></h4>

                                <div class="blog-meta">
                                    <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                                    <span> <i class="icofont-heart"></i> 2,568+ </span>
                                </div>

                                <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->

                    </div>
                </div>
            </div>
            <!-- Blog Wrapper End -->

        </div>
    </div>
@endsection
<!-- Blog End -->

