@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Manage Profiles</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">profile</li>
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
      Manage Profiles
    </h3>
  </div><!-- /.card-header -->
  <div class="card-body">
   <!-- Profile Image -->
     <div class="col-md-4 offset-md-4">
       <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="{{(!empty($user->image))?asset('public/upload/user_images/'.$user->image):asset('public/upload/no-image.png')}}"
                 alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{$user->name}}</h3>
                <p class="text-muted text-center">{{$user->address}}</p>
                <table width="100%" class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>Mobile No :</td>
                      <td>{{$user->mobile }}</td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td>{{$user->gender }}</td>
                    </tr>
                    <tr>
                      <td>Addres</td>
                      <td>{{$user->address }}</td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>{{$user->status }}</td>
                    </tr>
              </tbody>
          </table>
        <a href="{{route('edit.profiles')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
      </div>
    <!-- /.card-body -->
   </div>
  <!-- /.card-body -->
  </div> 
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
@endsection