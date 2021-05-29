@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
    <!-- Left col -->
    <section class="col-md-12">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card">
        <div class="card-header">
          <h3>
            Edit Profile
            <a class="btn btn-success float-right btn btn-sm" href="{{route('view.profiles')}}"><i class="fa fa-list"></i>YOUR Profile</a>
          </h3>
        </div><!-- /.card-header -->
        <div class="card-body">
         <form method="POST" action="{{route('profiles.update')}}" enctype="multipart/form-data" id="myForm">
         	@csrf
			  <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault01">Name</label>
            <input type="text" name="name" class="form-control"  placeholder=" name" value="{{$editData->name}}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">Email</label>
            <input type="email" name="email" class="form-control"  placeholder=" Email" value="{{$editData->email}}" >
            <!-- <font style="color:red">
              {{($errors->has('email'))?($errors->first('email')):''}}
            </font> -->
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault01">Mobile no</label>
            <input type="text" name="mobile" class="form-control"  placeholder=" mobile" value="{{$editData->mobile}}">
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">Address</label>
            <input type="address" name="address" class="form-control"  placeholder=" address" value="{{$editData->address}}" >
            <!-- <font style="color:red">
              {{($errors->has('email'))?($errors->first('email')):''}}
            </font> -->
          </div>
			  	<div class="col-md-4 mb-3">
			  		<label for="usertype">Gender</label>
			  		<select class="form-control" id="usertype" name="usertype">
					  <option value="">Select gender</option>
					  <option value="male" {{($editData->usertype=="Admin")?"Selected":''}}>male</option>
					  <option value="female" {{($editData->usertype=="User")?"Selected":''}}>female</option>
					</select>
			  	</div>
			    <div class="col-md-4 mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
          </div>
          <div class="col-md-4 mb-3">
            <img id="showImage" src="{{(!empty($editData->image))?asset('public/upload/user_images/'.$editData->image):url('public/upload/no-image.png')}}" style="width: 150px; height: 160px; border:1px solid #000;">
          </div>
			  </div>
			 <div>
  				<button class="btn btn-primary" value="Update" type="submit">Update</button>
  			</div>
		  </form>
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
  </div>
  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
$(function () {
  $('#myForm').validate({
    rules: {
      name: {
        required: true,
        name: true,
      },
      email: {
        required: true,
        email: true,
      }, 
    },
    messages: {
      email: {
        required: "Please enter a name address",
        name: "Please enter a vaild name address"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection