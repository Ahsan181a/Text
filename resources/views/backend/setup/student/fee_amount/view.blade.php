@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage ExamType</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Examtype</li>
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
           Examtype List
            <a class="btn btn-success float-right btn btn-sm" href="{{route('exam-type.create')}}"><i class="fa fa-plus-circle"></i>Add ExamType</a>
          </h3>
        </div><!-- /.card-header -->
        <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Sl.</th>
              <th>ExamType</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $value)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$value->name}}</td>
              <td style="text-align: center;">
                <a href="{{route('exam-type.edit',$value->id)}}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i>Edit</a>
              
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