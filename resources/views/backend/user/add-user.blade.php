@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage User</h1>
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
            Add User
            <a class="btn btn-success float-right btn btn-sm" href="{{route('view.user')}}"><i class="fa fa-list"></i>User List</a>
          </h3>
        </div><!-- /.card-header -->
        <div class="card-body">
         <form method="POST" action="{{route('user.store')}}" id="myForm">
         	@csrf
			  <div class="form-row">
			  	<div class="col-md-4 mb-3">
            <label for="usertype">User Role</label>
            <select class="form-control" id="usertype" name="usertype">
            <option value="">Select Role</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
          </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">Name</label>
			      <input type="text" name="name" class="form-control"  placeholder=" name" value="">
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault02">Email</label>
			      <input type="email" name="email" class="form-control"  placeholder=" Email" value="" >
			      <!-- <font style="color:red">
			      	{{($errors->has('email'))?($errors->first('email')):''}}
			      </font> -->
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault02">Password</label>
			      <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="">
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault02">Confirm Password</label>
			      <input type="text" name="password2" class="form-control"  placeholder="Confirm Password" value="">
			    </div>
			  </div>
			 <div>
  				<button class="btn btn-primary" value="submit" type="submit">Submit</button>
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