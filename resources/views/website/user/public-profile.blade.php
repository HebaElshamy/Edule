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


                            @foreach ($courses as $course)

                            <div class="col-md-6">
                                   <!-- Single Courses Start -->
                                   <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="{{route('user.welcome.singleCourse',$course->id)}}"><img src="{{uploadImage($course->image)}}" alt="Courses"></a>

                                        {{-- <div class="courses-option dropdown">
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
                                        </div> --}}
                                    </div>
                                    <div class="courses-content">
                                        {{-- <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#"><img src="{{asset('website_assets/')}}/assets/images/author/author-01.jpg" alt="Author"></a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#">Jason Williams</a>
                                                    <a class="name-2" href="#">Ohula Malsh</a>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <h4 class="title"><a href="{{route('user.welcome.singleCourse',$course->id)}}">{{$course->title}}</a></h4>

                                        <div class="courses-rating">
                                            <p>{{$course->userCourses()->first()->progress}}% Complete</p>

                                            <div class="rating-progress-bar">
                                                <div class="rating-line" style="width: {{$course->userCourses()->first()->progress}}%;"></div>
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
                        @endforeach

                    </div>
                </div>
                <!-- Blog Wrapper End -->

                <!-- Page Pagination End -->
                {{-- <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                    </ul>
                </div> --}}
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
                        <h4 class="widget-title">{{Auth::user()->name}}</h4>
                        {{-- show delete account errors  --}}
                        @if ($errors->has('password'))
                            <br>
                            <div class="alert alert-danger">
                                @foreach ($errors->get('password') as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                        <div class="widget-category">
                            <ul class="category-list">
                                <li><a href="#">Public Profile </a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Account Security</a></li>
                                {{-- <li><a href="#">Close Account</a></li> --}}
                                <li ><a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Close Account</a>  </li>
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



  <!-- Delete Account Modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="exampleModalLabel">Are you sure you want to delete your account? </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- فورم الإدخال الخاصة بالنموذج -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Single Form Start -->
                        <div class="single-form">
                            <p> Please enter your password to confirm you would like to permanently delete your account.</p>
                        </div>
                    <!-- Single Form End -->
                    </div>
                <form method="POST" action="{{ route('user.welcome.destroy') }}">
                    @csrf
                    @method('delete')

                <div class="col-md-12">
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <span class="is-invalid text-danger" role="alert">
                            <strong>Require *</strong>
                        </span>
                        <input id="password"
                        name="password"
                        type="password"
                        class="@error('password')
                                is-invalid
                            @enderror"
                        placeholder="Password">
                    </div>
                    <!-- Single Form End -->
                </div>

            <!-- زرّ لإرسال النموذج -->
            </div>

        </div>
        <div class="modal-footer justify-content-start">


            <button type="submit" class="btn btn-danger ">Delete Account</button>

            </form>

            {{-- <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">إغلاق</button> --}}

        </div>

      </div>
    </div>
</div>



@endsection






