{{-- @php
    dump($subjects)
@endphp --}}
@foreach ($subjects as $subject)

@if (count($subject->courses)>0)
<h2>{{$subject->name}}</h2>
 {{-- @foreach ($subject->courses as $course )
    <li>{{$course->title}}</li>

    @endforeach --}}


@endif
@endforeach



