@extends('website.layouts.banner')
@section('title')
Our <span>Courses</span>
@endsection
@section('content')


     <!-- Courses Start -->
     <div class="section section-padding">
        <div class="container">

            <!-- Courses Category Wrapper Start  -->
            <div class="courses-category-wrapper">
                <div class="courses-search search-2">
                    <form action="{{route('user.welcome.search')}}" method="GET">
                        @csrf
                    <input type="text" name="search" placeholder="Search here">
                    <button><i class="icofont-search"></i></button>
                    </form>
                </div>

                <ul class="category-menu">
                    <li><a class="active" href="#">All Courses</a></li>
                    <li><a href="#">Collections</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Archived</a></li>
                </ul>
            </div>
            <!-- Courses Category Wrapper End  -->

            <!-- Courses Wrapper Start  -->
            <div class="courses-wrapper-02">
                <div class="row">
                    @foreach ($courses as $course )
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Courses Start -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="{{route('user.welcome.singleCourse',$course->id)}}"><img src="{{uploadImage($course->image)}}" alt="Courses"></a>
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
                                        </div>
                                    </div>
                                    <div class="tag">
                                        <a href="#" style="width: 112%;">{{$course->subject->name}}</a>
                                    </div>
                                </div>

                                <h4 class="title"><a href="{{route('user.welcome.singleCourse',$course->id)}}">{{$course->title}}</a></h4>
                                <div class="courses-meta">
                                    <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                    <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                </div>
                                <div class="courses-price-review">
                                    <div class="courses-price">
                                        @if ($course->discoun_value ==0)
                                        <span class="sale-parice">${{$course->price}}</span>
                                        @else
                                            <span class="sale-parice">${{$course->discoun_value}}</span>
                                            <span class="old-parice">${{$course->price}}</span>
                                        @endif
                                    </div>
                                    <div class="courses-review">
                                        <span class="rating-count">4.9</span>
                                        <span class="rating-star">
                                                <span class="rating-bar" style="width: 80%;"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Courses End -->
                    </div>
                    @endforeach


                </div>
            </div>
            <!-- Courses Wrapper End  -->

        </div>
        {{$courses->links()}}
    </div>
    <!-- Courses End -->


@endsection
