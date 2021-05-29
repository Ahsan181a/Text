<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{Auth::User()->usertype}}</span>
    </a>

@php 
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName(); 
@endphp
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <img id="showImage" src="{{(!empty(Auth::user()->image))?asset('public/upload/user_images/'.Auth::user()->image):url('public/upload/no-image.png')}}" style="width: 50px; height: 60px; border:1px solid #000;">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::User()->name}}</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('view.user')}}" class="nav-link {{($route=='view.user')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
            </ul>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('view.profiles')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profiles</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Password
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('password.profiles.view')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('view.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setup.student.year.view')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> View Year</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setup.student.group.view')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student group</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setup.student.shift.view')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Shift</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setup.student.fee.view')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('subjects.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('exam-type.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('designation.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('feeamount.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> fee category amount</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Password
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('password.profiles.view')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li> 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>