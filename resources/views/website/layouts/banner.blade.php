<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edule - eLearning Website Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website_assets/')}}/assets/images/favicon.ico">
    @include('website.includes.style')
</head>
<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        @include('website.includes.header')
        <!-- Header Section End -->

        <!-- Page Banner Start -->
        <div class="section page-banner">

            <img class="shape-1 animation-round" src="{{asset('website_assets/')}}/assets/images/shape/shape-8.png" alt="Shape">

            <img class="shape-2" src="{{asset('website_assets/')}}/assets/images/shape/shape-23.png" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    {{-- <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Profile</li>
                    </ul> --}}
                    <h2 class="title">@yield('title')</h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{asset('website_assets/')}}/assets/images/shape/shape-5.png" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{asset('website_assets/')}}/assets/images/shape/shape-6.png" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{asset('website_assets/')}}/assets/images/shape/shape-24.png" alt="Shape">

            {{-- <img class="shape-author" src="{{asset('website_assets/')}}/assets/images/author/author-11.jpg" alt="Shape"> --}}
            <img class="shape-author" src="@yield('author',asset('website_assets/assets/images/author/author-11.jpg'))">

        </div>
        <!-- Page Banner End -->
         <!-- Content Start -->
         @yield('content')
         <!-- Content Start End -->
                 <!-- Download App Start -->
        @include('website.includes.download-app')
        <!-- Download App End -->

         <!-- Footer Start  -->
         @include('website.includes.footer')
         <!-- Footer End -->

              <!--Back To Start-->
        @include('website.includes.back')
        <!--Back To End-->

    </div>

      <!-- JS
    ============================================ -->

    @include('website.includes.script')

</body>

</html>

