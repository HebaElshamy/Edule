<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edule - eLearning Website</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="{{website_assets('assets/images/favicon.ico')}}">
    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/flaticon.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/icofont.min.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/font-awesome.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/apexcharts.css')}}">
    <link rel="stylesheet" href="{{website_assets('assets/css/plugins/jqvmap.min.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{website_assets('assets/css/style.css')}}">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">

        <!-- Login Header Start -->
        <div class="section login-header">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand">

                <!-- Header Logo Start -->
                <div class="login-header-logo logo-2">
                    <a href="index.html"><img src="{{website_assets('assets/images/logo-icon.png')}}" alt="Logo"></a></li>
                    <a href="index.html"><img src="{{website_assets('assets/images/text-logo.png')}}" alt="Logo"></a></li>
                </div>
                <!-- Header Logo End -->

                <!-- Header Search Start -->
                {{-- <div class="login-header-search search-2 dropdown">
                    <button class="search-toggle" data-bs-toggle="dropdown"><i class="flaticon-loupe"></i></button>

                    <div class="search-input dropdown-menu">
                        <form action="#">
                            <input type="text" placeholder="Search here">
                        </form>
                    </div>

                </div> --}}
                <!-- Header Search End -->

                <!-- Header Action Start -->
                <div class="login-header-action action-2 ml-auto">
                    {{-- <div class="dropdown">
                        <button class="action notification" data-bs-toggle="dropdown">
                            <i class="flaticon-notification"></i>
                            <span class="active"></span>
                        </button>
                        <div class="dropdown-menu dropdown-notification">
                            <ul class="notification-items-list">
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-ui-user"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-shopping-cart"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-danger text-white"><i class="icofont-book-mark"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-heart-alt"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-image"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i class="icofont-simple-right"></i></a>
                        </div>
                    </div> --}}

                    <a class="action author" href="#">
                        <img src="{{website_assets('assets/images/author/author-07.jpg')}}" alt="Author">
                    </a>

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="" href="{{route('user.welcome.profile',Auth::user()->id)}}"><i class="icofont-user"></i> Profile</a></li>
                            {{-- <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a></li> --}}
                            <li><a class="" href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icofont-logout"></i> Sign Out</a></li>
                            <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
                <!-- Header Action End -->

            </div>
            <!-- Login Header Wrapper End -->
        </div>
        <!-- Login Header End -->

        <!-- Courses Enroll Start -->
        <div class="section">

            <!-- Courses Enroll Wrapper Start -->
            <div class="courses-enroll-wrapper">

                <!-- Courses Video Player Start -->
                <div class="courses-video-player">

                    <!-- Courses Video Container Start -->
                    <div class="vidcontainer">
                        <video id="myvid"></video>

                        <div class="video-play-bar">
                            <div class="topControl">
                                <div class="progress">
                                    <span class="bufferBar"></span>
                                    <span class="timeBar"></span>
                                </div>
                                <div class="time">
                                    <span class="current"></span> /
                                    <span class="duration"></span>
                                </div>
                            </div>

                            <div class="controllers">
                                <div class="controllers-left">
                                    <button class="prevvid disabled" title="Previous video"><i class="icofont-ui-previous"></i></button>
                                    <button class="btnPlay" title="Play/Pause video"></button>
                                    <button class="nextvid" title="Next video"><i class="icofont-ui-next"></i></button>
                                    <button class="sound sound2" title="Mute/Unmute sound"></button>
                                    <div class="volume" title="Set volume">
                                        <span class="volumeBar"></span>
                                    </div>
                                </div>

                                <div class="controllers-right">
                                    <button class="btnspeed" title="Video speed"><i class="fa fa-gear"></i></button>
                                    <ul class="speedcnt">
                                        <li class="spdx50">1.5</li>
                                        <li class="spdx25">1.25</li>
                                        <li class="spdx1 selected">Normal</li>
                                        <li class="spdx050">0.5</li>
                                    </ul>
                                    <button class="btnFS" title="full screen"></button>
                                </div>
                            </div>
                        </div>

                        <div class="bigplay" title="play the video">
                            <i class="fa fa-play"></i>
                        </div>

                        <div class="loading">
                            <div class="spinner-border spinner">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                    </div>
                    <!-- Courses Video Container End -->

                    <!-- Courses Enroll Content Start -->
                    <div class="courses-enroll-content">

                        <!-- Courses Enroll Title Start -->
                        <div class="courses-enroll-title">
                            <h2 class="title">{{$course->title}}</h2>
                            <p><i class="icofont-eye-alt"></i> <span>{{ $course->userCourses()->count()}}</span> Students are watching</p>
                        </div>
                        <!-- Courses Enroll Title End -->

                        <!-- Courses Enroll Tab Start -->
                        <div class="courses-enroll-tab">
                            <div class="enroll-tab-menu">
                                <ul class="nav">
                                    {{-- <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Overview</button></li> --}}
                                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Description</button></li>
                                    {{-- <li><button  data-bs-toggle="tab" data-bs-target="#tab2">Description</button></li> --}}
                                    {{-- <li><button data-bs-toggle="tab" data-bs-target="#tab3">Certificates</button></li> --}}
                                    {{-- <li><button data-bs-toggle="tab" data-bs-target="#tab4">Instructor</button></li> --}}
                                </ul>
                            </div>
                            {{-- <div class="enroll-share">
                                <a href="#"><i class="icofont-share-alt"></i> Share</a>
                            </div> --}}
                        </div>
                        <!-- Courses Enroll Tab End -->

                        <!-- Courses Enroll Tab Content Start -->
                        <div class="courses-enroll-tab-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">

                                    <!-- Description Start -->
                                    <div class="description">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="enroll-tab-title">
                                                    <h3 class="title">Description</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="enroll-tab-content">
                                                    <p>{{ $course->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Description End -->

                                </div>
                                {{-- <div class="tab-pane fade show active" id="tab1">

                                    <!-- Overview Start -->
                                    <div class="overview">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="enroll-tab-title">
                                                    <h3 class="title">Course Details</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="enroll-tab-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book. It has survived not’s only and five centuries, but also the lea into electronic typesetting, remaining priting essentially unchanged. It was popularsed in the 1960 with containing Lorem Ipsum passages desktop publishing software.</p>

                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Instructor <span>:</span></th>
                                                                <td>Pamela Foster</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Duration <span>:</span></th>
                                                                <td>08 hr 15 mins</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Lectures <span>:</span></th>
                                                                <td>2,16</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Level <span>:</span></th>
                                                                <td>Secondary</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Language <span>:</span></th>
                                                                <td>English</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Caption’s <span>:</span></th>
                                                                <td>Yes</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book.</p>

                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Overview End -->

                                </div> --}}
                                {{-- <div class="tab-pane fade" id="tab2">

                                    <!-- Description Start -->
                                    <div class="description">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="enroll-tab-title">
                                                    <h3 class="title">Description</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="enroll-tab-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book. It has survived not’s only and five centuries, but also the lea into electronic typesetting, remaining priting essentially unchanged. It was popularsed in the 1960 with containing Lorem Ipsum passages desktop publishing software.</p>

                                                    <p class="text">“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has industry's standard dummy text ever since the 1500s when andom unknown printer took a galley scrambled it to make a type specimen book.”</p>

                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book. It has survived not’s only and five centuries, but also the lea into electronic typesetting, remaining priting essentially unchanged. It was popularsed in the 1960 with containing Lorem Ipsum passages desktop publishing software.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Description End -->

                                </div> --}}
                                {{-- <div class="tab-pane fade" id="tab3">

                                    <!-- Certificates Start -->
                                    <div class="certificates">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="enroll-tab-title">
                                                    <h3 class="title">EduLe Certificates</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="enroll-tab-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book. It has survived not’s only and five centuries, but also the lea into electronic typesetting, remaining priting essentially unchanged. It was popularsed in the 1960 with containing Lorem Ipsum passages desktop publishing software.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Certificates End -->

                                </div> --}}
                                {{-- <div class="tab-pane fade" id="tab4">

                                    <!-- Instructor Start -->
                                    <div class="instructor">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="enroll-tab-title">
                                                    <h3 class="title">Instructor</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="enroll-tab-content">

                                                    <!-- Single Instructor Start -->
                                                    <div class="single-instructor">
                                                        <div class="review-author">
                                                            <div class="author-thumb">
                                                                <img src="{{website_assets('assets/images/author/author-06.jpg')}}" alt="Author">
                                                            </div>
                                                            <div class="author-content">
                                                                <h4 class="name">Sara Alexander</h4>
                                                                <span class="designation">Product Designer, USA</span>
                                                                <span class="rating-star">
																		<span class="rating-bar" style="width: 80%;"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <!-- Single Instructor End -->

                                                    <!-- Single Instructor Start -->
                                                    <div class="single-instructor">
                                                        <div class="review-author">
                                                            <div class="author-thumb">
                                                                <img src="{{website_assets('assets/images/author/author-07.jpg')}}" alt="Author">
                                                            </div>
                                                            <div class="author-content">
                                                                <h4 class="name">Karol Bachman</h4>
                                                                <span class="designation">Product Designer, USA</span>
                                                                <span class="rating-star">
																		<span class="rating-bar" style="width: 80%;"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <!-- Single Instructor End -->

                                                    <!-- Single Instructor Start -->
                                                    <div class="single-instructor">
                                                        <div class="review-author">
                                                            <div class="author-thumb">
                                                                <img src="{{website_assets('assets/images/author/author-03.jpg')}}" alt="Author">
                                                            </div>
                                                            <div class="author-content">
                                                                <h4 class="name">Gertude Culbertson</h4>
                                                                <span class="designation">Product Designer, USA</span>
                                                                <span class="rating-star">
																		<span class="rating-bar" style="width: 80%;"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s when andom unknown printer took a galley of type scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <!-- Single Instructor End -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Instructor End -->

                                </div> --}}
                            </div>
                        </div>
                        <!-- Courses Enroll Tab Content End -->

                    </div>
                    <!-- Courses Enroll Content End -->
                </div>
                <!-- Courses Video Player End -->

                <!-- Courses Video Playlist Start -->
                <div class="courses-video-playlist">
                    <div class="playlist-title">
                        <h3 class="title">Course Content</h3>
                        <span>{{ $course->lectures()->count()}} Lectures </span>
                    </div>

                    <!-- Video Playlist Start  -->
                    <div class="video-playlist">
                        <div class="accordion" id="videoPlaylist">

                            <!-- Accordion Items Start  -->
                            <div class="accordion-item">
                                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <p>All Lectures</p>
                                </button>

                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#videoPlaylist">
                                    <nav class="vids">
                                        {{-- <a class="link active" href="https://player.vimeo.com/external/215175080.hd.mp4?s=5b17787857fd95646e67ad0f666ea69388cb703c&amp;profile_id=119">
                                            <p>01. The Complete Medicine Masterclass</p>
                                            <span class="total-duration">08 minutes</span>
                                        </a> --}}
                                        @if (!empty($course->lectures()->first()->link))
                                        <a class="link active" href="{{$course->lectures()->first()->link}}">
                                            <p>0.{{$course->lectures()->first()->title }}</p>
                                            {{-- <span class="total-duration">08 minutes</span> --}}
                                        </a>


                                        @endif
                                        @forelse ($course->lectures as $key=>$lecture )
                                            @if($lecture->title == $course->lectures()->first()->title )
                                                @continue
                                            @else
                                                <a class="link " href="{{$lecture->link}}">
                                                    <p>{{$key.".".$lecture->title }}</p>
                                                    {{-- <span class="total-duration">08 minutes</span> --}}
                                                </a>
                                            @endif
                                        @empty
                                        <a class="link" >
                                            <p>No Lectures Yet</p>
                                        </a>
                                        @endforelse
                                    </nav>
                                </div>
                            </div>
                            <!-- Accordion Items End  -->




















                        </div>
                    </div>
                    <!-- Video Playlist End  -->

                </div>
                <!-- Courses Video Playlist End -->

            </div>
            <!-- Courses Enroll Wrapper End -->

        </div>
        <!-- Courses Enroll End -->

        <!-- Download App Start -->
        <div class="section section-padding download-section">

            <div class="app-shape-1"></div>
            <div class="app-shape-2"></div>
            <div class="app-shape-3"></div>
            <div class="app-shape-4"></div>

            <div class="container">

                <!-- Download App Wrapper Start -->
                <div class="download-app-wrapper mt-n6">

                    <!-- Section Title Start -->
                    <div class="section-title section-title-white">
                        <h5 class="sub-title">Ready to start?</h5>
                        <h2 class="main-title">Download our mobile app. for easy to start your course.</h2>
                    </div>
                    <!-- Section Title End -->

                    <img class="shape-1 animation-right" src="{{website_assets('assets/images/shape/shape-14.png')}}" alt="Shape">

                    <!-- Download App Button End -->
                    <div class="download-app-btn">
                        <ul class="app-btn">
                            <li><a href="#"><img src="{{website_assets('assets/images/google-play.png')}}" alt="Google Play"></a></li>
                            <li><a href="#"><img src="{{website_assets('assets/images/app-store.png')}}" alt="App Store"></a></li>
                        </ul>
                    </div>
                    <!-- Download App Button End -->

                </div>
                <!-- Download App Wrapper End -->

            </div>
        </div>
        <!-- Download App End -->

        <!-- Footer Start  -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section">

                <img class="shape-1 animation-down" src="{{website_assets('assets/images/shape/shape-21.png')}}" alt="Shape">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="#"><img src="{{website_assets('assets/images/logo.png')}}" alt="Logo"></a>
                                </div>

                                <div class="widget-address">
                                    <h4 class="footer-widget-title">Caribbean Ct</h4>
                                    <p>Haymarket, Virginia (VA).</p>
                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p> <i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                    </li>
                                    <li>
                                        <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a> </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <div class="col-lg-6 order-md-3 order-lg-2">

                            <!-- Footer Widget Link Start -->
                            <div class="footer-widget-link">

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Category</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Creative Writing</a></li>
                                        <li><a href="#">Film & Video</a></li>
                                        <li><a href="#">Graphic Design</a></li>
                                        <li><a href="#">UI/UX Design</a></li>
                                        <li><a href="#">Business Analytics</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Quick Links</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Discussion</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Support</a></li>
                                        <li><a href="#">Course FAQ’s</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                            </div>
                            <!-- Footer Widget Link End -->

                        </div>
                        <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Subscribe</h4>

                                <div class="widget-subscribe">
                                    <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>

                                    <div class="widget-form">
                                        <form action="#">
                                            <input type="text" placeholder="Email here">
                                            <button class="btn btn-primary btn-hover-dark">Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                    </div>
                </div>

                <img class="shape-2 animation-left" src="{{website_assets('assets/images/shape/shape-22.png')}}" alt="Shape">

            </div>
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                            <a href="#">Terms of Service</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Sitemap</a>
                            <a href="#">Security</a>
                        </div>
                        <div class="copyright-text">
                            <p>&copy; 2021 <span> Edule </span> Made with <i class="icofont-heart-alt"></i> by <a href="#">Codecarnival</a></p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>
            <!-- Footer Copyright End -->

        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>






    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{website_assets('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{website_assets('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{website_assets('assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{website_assets('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/video-playlist.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{website_assets('assets/js/plugins/ajax-contact.js')}}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="{{website_assets('assets/js/plugins.min.js')}}"></script> -->


    <!-- Main JS -->
    <script src="{{website_assets('assets/js/main.js')}}"></script>

</body>

</html>
