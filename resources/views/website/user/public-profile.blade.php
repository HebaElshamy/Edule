@extends('website.layouts.banner')

@section('title')
    Your <span>Profile</span>
@endsection

@section('content')
  <!-- Blog Start -->
  <div class="section section-padding mt-n10">
    <div class="container">

        <div class="row flex-row-reverse gx-10">
            <div class="col-lg-8">

                <!-- Blog Wrapper Start -->
                <div class="blog-wrapper">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="about-content">
                                <h5 class="sub-title">Courses you're enrolled in</h5>

                            </div>


                        </div>
                        <div class="col-md-6">

                             <!-- Single Courses Start -->
                    <div class="single-courses">
                        <div class="courses-images">
                            <a href="courses-details.html"><img src="{{asset('website_assets/')}}/assets/images/courses/courses-01.jpg" alt="Courses"></a>

                            <div class="courses-option dropdown">
                                <button class="option-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icofont-share-alt"></i> Share</a></li>
                                    <li><a href="#"><i class="icofont-plus"></i> Create Collection</a></li>
                                    <li><a href="#"><i class="icofont-star"></i> Favorite</a></li>
                                    <li><a href="#"><i class="icofont-archive"></i> Archive</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="courses-content">
                            <div class="courses-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <a href="#"><img src="{{asset('website_assets/')}}/assets/images/author/author-01.jpg" alt="Author"></a>
                                    </div>
                                    <div class="author-name">
                                        <a class="name" href="#">Jason Williams</a>
                                        <a class="name-2" href="#">Ohula Malsh</a>
                                    </div>
                                </div>
                            </div>

                            <h4 class="title"><a href="courses-details.html">Data Science and Machine Learning with Python - Hands On!</a></h4>

                            <div class="courses-rating">
                                <p>38% Complete</p>

                                <div class="rating-progress-bar">
                                    <div class="rating-line" style="width: 38%;"></div>
                                </div>

                                <div class="rating-meta">
                                    <span class="rating-star">
                                            <span class="rating-bar" style="width: 80%;"></span>
                                    </span>
                                    <p>Your rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->

                        </div>

                    </div>
                </div>
                <!-- Blog Wrapper End -->

                <!-- Page Pagination End -->
                <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                    </ul>
                </div>
                <!-- Page Pagination End -->

            </div>
            <div class="col-lg-4">

                <!-- Blog Sidebar Start -->
                <div class="sidebar">

                    <!-- Sidebar Widget Search Start -->
                    <div class="sidebar-widget widget-search">
                        <form action="#">
                            <input type="text" placeholder="Search here">
                            <button><i class="icofont-search-1"></i></button>
                        </form>
                    </div>
                    <!-- Sidebar Widget Search End -->

                    <!-- Sidebar Widget Category Start -->
                    <div class="sidebar-widget">
                        <h4 class="widget-title">User Name</h4>

                        <div class="widget-category">
                            <ul class="category-list">
                                <li><a href="#">Public Profile </a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Account Security</a></li>
                                <li><a href="#">Close Account</a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Widget Category End -->



                </div>
                <!-- Blog Sidebar End -->

            </div>
        </div>

    </div>
</div>
<!-- Blog End -->
@endsection




