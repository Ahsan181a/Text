@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Shift</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Shift</li>
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
            Add Shift
            <a class="btn btn-success float-right btn btn-sm" href="{{route('setup.student.shift.view')}}"><i class="fa fa-list"></i>shift List</a>
          </h3>
        </div><!-- /.card-header -->
        <div class="card-body">
         <form method="post" action="{{route('setup.student.shift.store')}}" id="myForm">
          @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label >Shift</label>
                <input type="text" name="name" class="form-control"  placeholder=" name" value="{{@$editData->name}}">
                <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
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
 
@endsection