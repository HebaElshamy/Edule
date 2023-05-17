@extends('website.layouts.banner')
@section('title')
Register <span>Form</span>
@endsection
@section('content')


   <!-- Register & Login Start -->
   <div class="section section-padding">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Register & Login Images Start -->
                    <div class="register-login-images">
                        <div class="shape-1">
                            <img src="{{asset('website_assets/')}}/assets/images/shape/shape-26.png" alt="Shape">
                        </div>


                        <div class="images">
                            <img src="{{asset('website_assets/')}}/assets/images/register-login.png" alt="Register Login">
                        </div>
                    </div>
                    <!-- Register & Login Images End -->

                </div>
                <div class="col-lg-6">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Registration <span>Now</span></h3>

                        <div class="form-wrapper">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="text" placeholder="Name" value="{{old('name')}}" name="name"
                                    @error('name') class="is-invalid" @enderror>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="email" placeholder="Email" value="{{old('email')}}" name="email"  @error('email') class="is-invalid" @enderror>
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" placeholder="Password" name="password" @error('password') class="is-invalid" @enderror>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-dark w-100">Create an account</button>
                                    <a class="btn btn-secondary btn-outline w-100" href="#">Sign up with Google</a>
                                </div>
                                <!-- Single Form End -->
                            </form>
                        </div>
                    </div>
                    <!-- Register & Login Form End -->

                </div>
            </div>
        </div>
        <!-- Register & Login Wrapper End -->

    </div>
</div>
<!-- Register & Login End -->
@endsection
