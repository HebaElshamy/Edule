@extends('admin.layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">All Users</li>
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
                    <h3 class="card-title">{{ucfirst($user->name)}}'s Courses</h3>
                    <a href="{{route('admin.user.create.course',$user->id)}}" class="btn btn-primary float-right">Add Course</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                        @include('admin.includes.session_message')
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 20px">#</th>
                            <th>Course Name</th>
                            <th>Progress</th>
                            <th >Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @forelse ($courses as $key =>$course)
                            <tr>
                                <td>{{$key+1}}.</td>
                                <td>{{$course->course->title}}</td>
                                <td>{{$course->progress}}</td>
                                <td style="">

                                    {{-- modal --}}
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
                                                        <span class="info-box-text text-center text-muted">Course Title : {{$course->course->title}}</span>
                                                        {{-- <span class="info-box-number text-center text-muted mb-0">Course Name : {{$course->title}}</span> --}}
                                                        <span class="info-box-number text-center text-muted mb-0"></span>
                                                        <span class="info-box-number text-center text-muted mb-0"></span>
                                                        <span class="info-box-number text-center text-muted mb-0"></span>
                                                        <span class="info-box-number text-center text-muted mb-0"></span>

                                                    </div>
                                                </div>
                                                <div>
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
                                        {{-- end modal --}}
                                    <form action="{{route('admin.user.destroy.course',$course->id)}}" method="post">
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
