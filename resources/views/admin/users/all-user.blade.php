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
                    <h3 class="card-title">All Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                        @include('admin.includes.session_message')
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 20px">#</th>
                            <th>Name</th>
                            <th >Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @forelse ($users as $key =>$user)
                            <tr>
                                <td>{{$key+1}}.</td>
                                <td>{{$user->name}}</td>
                                {{-- <td>
                                    <a href="{{asset('uploaded/'.$course->image)}}" target="_blank">
                                        <img src="{{asset('uploaded/'. $course->image)}}" width="50px" height="50px" alt="{{$course->title}}" title="{{$course->title}}" srcset="">
                                    </a>
                                </td> --}}

                                <td style="">
                                    <a href="{{route('admin.user.show',$user->id)}}" class="btn btn-warning btn-sm float-left mr-1">
                                        <i class="fas fa-eye"></i>
                                        Show</a>
                                    <form action="{{route('admin.user.destroy',$user->id)}}" method="post">
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
                                <td colspan="4" >No users Yet</td>
                            @endforelse


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                    {{$users->links()}}
            </div>
        <!-- /.card -->
        </div>
        </div>
    </div>

</section>


@endsection
