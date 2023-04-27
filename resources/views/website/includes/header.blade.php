<!-- Header Section Start -->
<div class="header-section">

    {{-- @include('website.includes.top-header') --}}

    <!-- Header Main Start -->
    <div class="header-main">
        <div class="container">

            <!-- Header Main Start -->
            <div class="header-main-wrapper">

                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="index.html"><img src="{{asset('website_assets/')}}/assets/images/logo.png" alt="Logo"></a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="header-menu d-none d-lg-block">
                    <ul class="nav-menu">
                        <li><a href="{{route('user.welcome.index')}}">Home</a></li>
                        <li>
                            <a href="#">All Course</a>
                            <ul class="sub-menu">
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="courses-details.html">Courses Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Details</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        @php
                            $user = Auth::user();
                        @endphp
                        @if ($user)

                        <li>
                            <a class="sign-up" href="#">{{$user->name}}</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('user.welcome.profile',$user->id)}}">Profile</a></li>
                                <li>
                                    <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Log Out
                                    </a>
                                </li>
                                <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                        @endif

                    </ul>

                </div>
                <!-- Header Menu End -->

                <!-- Header Sing In & Up Start -->
                <div class="header-sign-in-up d-none d-lg-block">


                    @if(!$user)
                    <ul>
                        <li><a class="sign-in" href="{{route('user.welcome.login.form')}}">Sign In</a></li>
                        <li><a class="sign-up" href="{{route('user.welcome.register.form')}}">Sign Up</a></li>
                    </ul>
                    @endif

                </div>
                <!-- Header Sing In & Up End -->

                <!-- Header Mobile Toggle Start -->
                <div class="header-toggle d-lg-none">
                    <a class="menu-toggle" href="javascript:void(0)">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- Header Mobile Toggle End -->

            </div>
            <!-- Header Main End -->

        </div>
    </div>
    <!-- Header Main End -->

</div>
<!-- Header Section End -->

<!-- Mobile Menu Start -->
<div class="mobile-menu">

    <!-- Menu Close Start -->
    <a class="menu-close" href="javascript:void(0)">
        <i class="icofont-close-line"></i>
    </a>
    <!-- Menu Close End -->

    <!-- Mobile Top Medal Start -->
    <div class="mobile-top">
        <p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>
        <p><i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a></p>
    </div>
    <!-- Mobile Top Medal End -->

    <!-- Mobile Sing In & Up Start -->
    <div class="mobile-sign-in-up">

        @if (!$user)
        <ul>
            <li><a class="sign-in" href="{{route('user.welcome.login.form')}}">Sign In</a></li>
            <li><a class="sign-up" href="{{route('user.welcome.register.form')}}">Sign Up</a></li>
        </ul>
        @endif


    </div>
    <!-- Mobile Sing In & Up End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-items">
        <ul class="nav-menu">
            <li><a href="{{route('user.welcome.index')}}">Home</a></li>
            @if ($user)
            <li>
                <a href="#" >{{$user->name}}</a>
                <ul class="sub-menu">
                    <li><a href="{{route('user.welcome.profile',$user->id)}}">Profile</a></li>
                    <li>
                        <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                            Log Out
                        </a>
                    </li>
                    <form action="{{route('logout')}}" id="logout-form-mobile" method="POST" style="display: none">
                        @csrf
                    </form>
                </ul>
            </li>
            @endif


            <li>
                <a href="#">All Course</a>
                <ul class="sub-menu">
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="courses-details.html">Courses Details</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Blog</a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog Details</a>
                        <ul class="sub-menu">
                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

    </div>
    <!-- Mobile Menu End -->

    <!-- Mobile Menu End -->
    <div class="mobile-social">
        <ul class="social">
            <li><a href="#"><i class="flaticon-facebook"></i></a></li>
            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
            <li><a href="#"><i class="flaticon-skype"></i></a></li>
            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
        </ul>
    </div>
    <!-- Mobile Menu End -->

</div>
<!-- Mobile Menu End -->

<!-- Overlay Start -->
<div class="overlay"></div>
<!-- Overlay End -->
