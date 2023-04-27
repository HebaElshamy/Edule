@extends('admin.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Lectures of : {{$course->title}}</h1>
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
                        <h3 class="card-title">All Lecture</h3>
                        <a href="{{route('admin.lectures.create', $course->id)}}" class="btn btn-primary float-right">Add Lecture</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            @include('admin.includes.session_message')
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 20px">#</th>
                                <th>Title</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($lectures as $key =>$lecture)
                                <tr>
                                    <td>{{$key+1}}.</td>
                                    <td>{{$lecture->title}}</td>

                                    {{-- href="{{route('admin.lectures.show',$lecture->id)}} --}}
                                    <td style="">
                                        <a class="btn btn-warning btn-sm float-left mr-2" data-toggle="modal" data-target="#modal-secondary{{$lecture->id}}"  >
                                            <i class="fas fa-eye">
                                            </i>
                                            View
                                        </a>
                                        <div class="modal fade" id="modal-secondary{{$lecture->id}}">
                                            <div class="modal-dialog">
                                              <div class="modal-content bg-dark">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Lecture Details</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                          <span class="info-box-text text-center text-muted">Lecture Title : {{$lecture->title}}</span>

                                                          <span class="info-box-number text-center text-muted mb-0">Lecture Views : {{$lecture->views}}</span>

                                                        </div>
                                                    </div>
                                                    <div>

                                                        <div class="float-left" >
                                                            <a href="{{asset('uploaded/'.$lecture->image)}}" target="_blank">
                                                                <img class=" img-fluid img-circle" style="border: 3px solid #adb5bd;padding: 3px;" src="{{asset('uploaded/'. $lecture->image)}}" width="70px" height="70px" alt="{{$lecture->title}}" title="{{$lecture->title}}" srcset="">
                                                            </a>
                                                        </div>
                                                        <div class="user-block">

                                                            <span class="username">
                                                              <a href="{{$lecture->link}}" target="_blank" class=" primary-box-link " >{{$lecture->title}} Link</a>
                                                            </span>
                                                            <span class="description">Lecture Published at : {{$lecture->created_at->diffForHumans()}}</span>

                                                            <p class="username">
                                                                Lecture Description : <span class=" link-black" >{{$lecture->description}}</span>
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




                                          <a href="{{route('admin.lectures.edit',$lecture->id)}}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                            Edit
                                        </a>

                                        <form action="{{route('admin.lectures.destroy',$lecture->id)}}" method="post">
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
                                    <td colspan="4" >No lectures Yet</td>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                        {{$lectures->links()}}
                </div>
            <!-- /.card -->
            </div>
            </div>
        </div>

    </section>


@endsection
