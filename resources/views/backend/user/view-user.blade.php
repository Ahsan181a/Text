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
            User List
            <a class="btn btn-success float-right btn btn-sm" href="{{route('add.user')}}"><i class="fa fa-plus-circle"></i>Add user</a>
          </h3>
        </div><!-- /.card-header -->
        <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Sl.</th>
              <th>Role</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $user)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$user->usertype}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td style="text-align: center;">
                <a href="{{route('edit.user',$user->id)}}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i>Edit</a>
                <a href="{{route('delete.user',$user->id)}}" id="delete" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i>Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
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
@endsection