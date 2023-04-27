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

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->

        @if ($errors->any())
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        @endif
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.courses.update',$course->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Course Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Subject Title" value="{{$course->title}}">
                    </div>
                    <div class="form-group">
                        <label>Course Description</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="Enter Description ...">{{$course->description}}</textarea>
                    </div>
                    <div class="form-group">

                    <label for="image">Image</label>
                  <a href="{{asset('uploaded/'.$course->image)}}" target="_blank" >
                    <img src="{{asset('uploaded/'. $course->image)}}" width="50px" height="50px" alt="{{$course->title}}" title="{{$course->title}}" srcset="">
                </a> (current image)
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                        </div>

                    </div>
                    </div>
                    <div class="form-group">
                        <label>Subject Name</label>
                        <select class="form-control" name="subject_id">
                        <option  disabled>Select Subject</option>
                        @foreach ($subjects as $subject )
                        <option @if ($course->subject_id == $subject->id)
                            selected
                        @endif  value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Course Price</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="Enter Course Price" value="{{$course->price}}">
                    </div>
                    <div class="form-group">
                        <label>Discount Type</label>
                        <select class="form-control" name="discount_type">
                        <option selected disabled>Select Discount Type</option>
                        <option  @if ($course->discount_type =='fixed')
                            selected
                        @endif value="fixed">fixed</option>
                        <option  @if ($course->discount_type =='precent')
                            selected
                        @endif value="precent">precent</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="discoun_value">Discount Value</label>
                        <input type="number" class="form-control" name="discoun_value" id="discoun_value" placeholder="Enter Course Discount Value" value="{{$course->discoun_value}}">
                    </div>
                    <div class="form-group">
                        <label for="max_discount">Max Discount</label>
                        <input type="number" class="form-control" name="max_discount" id="max_discount" placeholder="Enter Course Max Discount" value="{{$course->max_discount}}">
                    </div>


                </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>
  </section>




@endsection
