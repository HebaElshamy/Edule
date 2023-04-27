@extends('admin.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Subjects</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Subjects</li>
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
                        <h3 class="card-title">All Subjects</h3>
                        <a href="{{route('admin.subjects.create')}}" class="btn btn-primary float-right">Add Subject</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            @include('admin.includes.session_message')
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 20px">#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($subjects as $key =>$subject)
                                <tr>
                                    <td>{{$key+1}}.</td>
                                    <td>{{$subject->name}}</td>
                                    <td>
                                        <a href="{{asset('uploaded/'.$subject->image)}}" target="_blank">
                                        <img src="{{asset('uploaded/'. $subject->image)}}" width="50px" height="50px" alt="{{$subject->name}}" title="{{$subject->name}}" srcset="">
                                    </a>
                                    </td>
                                    <td style="">
                                        <a href="{{route('admin.subjects.edit',$subject->id)}}" class="btn btn-info btn-sm float-left mr-2 ">
                                            <i class="fas fa-pencil-alt"></i> Edit</a>
                                        {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                                        <form action="{{route('admin.subjects.destroy',$subject->id)}}" method="post">
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
                                    <td colspan="4" >No Subjects Yet</td>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                        {{$subjects->links()}}
                </div>
            <!-- /.card -->
            </div>
            </div>
        </div>

    </section>


@endsection
