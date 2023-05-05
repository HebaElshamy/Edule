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
            <form action="{{route('admin.courses.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="title">Course Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Subject Title">
                    </div>
                    <div class="form-group">
                        <label>Course Description</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="Enter Description ..."></textarea>
                    </div>
                    <div class="form-group">
                    <label for="image">Image</label>
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
                        <option selected disabled>Select Subject</option>
                        @foreach ($subjects as $subject )
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Course Price</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="Enter Course Price">
                    </div>
                    <div class="form-group">
                        <label>Discount Type</label>
                        <select class="form-control" name="discount_type">
                        <option selected disabled>Select Discount Type</option>
                        <option selected value="fixed">fixed</option>
                        <option value="precent">precent</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="discoun_value">Discount Value</label>
                        <input type="number" class="form-control" name="discoun_value" id="discoun_value" placeholder="Enter Course Discount Value" value="0">
                    </div>
                    <div class="form-group">
                        <label for="max_discount">Max Discount</label>
                        <input type="number" class="form-control" name="max_discount" id="max_discount" placeholder="Enter Course Max Discount" value="0">
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
