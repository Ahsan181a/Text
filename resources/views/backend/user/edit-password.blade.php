@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Password</h1>
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
            Edit password
            <a class="btn btn-success float-right btn btn-sm" href="{{route('view.user')}}"><i class="fa fa-list"></i>User List</a>
          </h3>
        </div><!-- /.card-header -->
        <div class="card-body">
         <form method="POST" action="{{route('password.profiles.update')}}" id="myForm">
         	@csrf
			  <div class="form-row">
			  	<div class="col-md-4 mb-3">
            <label for="validationDefault02">Current Password</label>
            <input type="password" name="current_password" class="form-control" id="current_password"  value="">
          </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault02"> New Password</label>
			      <input type="password" name="new_password" class="form-control" id="new_password" value="">
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault02">Again New password</label>
			      <input type="password" name="again_new_password" class="form-control"  value="">
			    </div>
			  </div>
			 <div>
  				<button class="btn btn-primary" value="update" type="submit">Submit</button>
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
      password: {
        required: true,
        minlength: 6
      },
      password2: {
        required: true,
        equelTo: '#password'
      }
      
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
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      password2: {
        required: "Please provide a password",
        equelTo: "Your password must be at least 5 characters long"
      }
      
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