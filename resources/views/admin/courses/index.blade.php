@extends('admin.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Courses</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Courses</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
             <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Courses</h3>
                        <a href="{{route('admin.courses.create')}}" class="btn btn-primary float-right">Add Course</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            @include('admin.includes.session_message')
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 20px">#</th>
                                <th>Title</th>
                                <th>Subject</th>
                                <th >Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @forelse ($courses as $key =>$course)
                                <tr>
                                    <td>{{$key+1}}.</td>
                                    <td>{{$course->title}}</td>
                                    {{-- <td>
                                        <a href="{{asset('uploaded/'.$course->image)}}" target="_blank">
                                            <img src="{{asset('uploaded/'. $course->image)}}" width="50px" height="50px" alt="{{$course->title}}" title="{{$course->title}}" srcset="">
                                        </a>
                                    </td> --}}
                                    <td>{{$course->subject->name}}</td>
                                    <td style="">
                                        <a class="btn btn-warning btn-sm float-left mr-2" data-toggle="modal" data-target="#modal-secondary{{$course->id}}"  >
                                            <i class="fas fa-eye">
                                            </i>
                                            View
                                        </a>
                                        <div class="modal fade" id="modal-secondary{{$course->id}}">
                                            <div class="modal-dialog">
                                              <div class="modal-content bg-dark">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Course Details</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                          <span class="info-box-text text-center text-muted">Course Title : {{$course->title}}</span>
                                                          {{-- <span class="info-box-number text-center text-muted mb-0">Course Name : {{$course->title}}</span> --}}
                                                          <span class="info-box-number text-center text-muted mb-0">Course Price : {{$course->price}}</span>
                                                          <span class="info-box-number text-center text-muted mb-0">Discount Type : {{$course->discount_type}}</span>
                                                          <span class="info-box-number text-center text-muted mb-0">Discount Value : {{$course->discoun_value}}</span>
                                                          <span class="info-box-number text-center text-muted mb-0">Max Discount : {{$course->max_discount}}</span>
                                                            @foreach ($subjects as $subject)
                                                                @if ($course->subject_id == $subject->id)
                                                                <span class="info-box-number text-center text-muted mb-0">Subject Name : {{$subject->name}}</span>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div>


                                                        <div class="float-left" >
                                                            <a href="{{asset('uploaded/'. $course->image)}}" target="_blank">
                                                                <img class=" img-fluid img-circle" style="border: 3px solid #adb5bd;padding: 3px;" src="{{asset('uploaded/'. $course->image)}}" width="70px" height="70px" alt="{{$course->title}}" title="{{$course->title}}" srcset="">
                                                            </a>
                                                        </div>
                                                        <div class="user-block">
                                                            <span class="description">Course Published at : {{$course->created_at->diffForHumans()}}</span>

                                                            <p class="username">
                                                                Course Description : <span class=" link-black" >{{$course->description}}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>

                                                </div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <a href="{{route('admin.courses.edit',$course->id)}}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                            Edit</a>
                                        <a href="{{route('admin.lectures.index',$course->id)}}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                            Lectures</a>
                                        {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                                        <form action="{{route('admin.courses.destroy',$course->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background: none;border: none">
                                                <a class="btn btn-danger btn-sm float">
                                                <i class="fas fa-trash"></i> Delete</a></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" >No courses Yet</td>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                        {{$courses->links()}}
                </div>
            <!-- /.card -->
            </div>
            </div>
        </div>

    </section>


@endsection
