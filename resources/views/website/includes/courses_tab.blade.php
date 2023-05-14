@foreach ($subject_courses as $subject )

@if (count($subject->courses)>0)
<div class="tab-pane fade " id="tabs{{$subject->id}}" >

    <!-- All Courses Wrapper Start -->
    <div class="courses-wrapper">
        <div class="row">
            @foreach ($subject->courses as $course)
            <div class="col-lg-4 col-md-6">
                <!-- Single Courses Start -->
                <div class="single-courses">
                    <div class="courses-images">
                        <a href="{{route('user.welcome.singleCourse',$course->id)}}"><img src="{{uploadImage($course->image)}}" alt="Courses"></a>
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
                            <span> <i class="icofont-read-book"></i> {{ $course->lectures()->count() }} Lectures </span>
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
    <!-- All Courses Wrapper End -->


</div>
@endif













@endforeach
