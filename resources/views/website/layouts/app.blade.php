<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edule - eLearning Website </title>
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



        <!-- Slider Start -->
        @yield('slider')
        <!-- Slider End -->

        <!-- Content Start -->
        @yield('content')
        <!-- Content Start End -->

        <!-- All Courses Start -->
        @yield('allCourses')
        <!-- All Courses End -->

        <!-- Call to Action Start -->
        @yield('callInstractor')
        <!-- Call to Action End -->

        <!-- How It Work End -->
        @yield('howWork')
        <!-- How It Work End -->

        <!-- Download App Start -->
        @include('website.includes.download-app')
        <!-- Download App End -->

        <!-- Testimonial End -->
        @yield('feedback')
        <!-- Testimonial End -->

        <!-- Brand Logo Start -->
        @yield('brandLogo')
        <!-- Brand Logo End -->

        <!-- Blog Start -->
        @yield('blogStart')
        <!-- Blog End -->

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
