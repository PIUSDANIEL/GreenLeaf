<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Greenleaf</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">

   <!--Sweet alert---->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- DataTables -->
   <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini"  style="background-color:#00dfff;">
    <div class="col-12 ">

        <nav class="nav justify-content-end">
          <a class="nav-link dashbordhome active" href="{{ route('/') }}">Home</a>
          <a class="nav-link dashbordhome" href="#">About us</a>
          <a class="nav-link dashbordhome" href="#">Contact us</a>


        </nav>

        <div class="row bg-image ">

            <img src="{{asset('images/font.jpg')}}" class="" width="100%" height="120px">

        </div>
    </div>
<div class="wrapper"  style="background-color:#00dfff;">

    @if (session('success'))

    <script>
        swal("Welcome","{!! session('success') !!}","success",{
            button:"ok",
        });
    </script>

    @endif

     {{-- -Alerts --}}

     @if (session('edited'))

     <script>
         swal("Updated","{!! session('edited') !!}","success",{
             button:"ok",
         });
     </script>

     @endif



     @if ($errors->any())

     <script>
         swal("Failed","Please check your input","error",{
             button:"ok",
         });
     </script>

     @endif



     @if (session('edited_failed'))

     <script>
         swal("Updated","{!! session('edited_failed') !!}","error",{
             button:"ok",
         });
     </script>

     @endif




  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"  style="background-color:#00dfff;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('/') }}" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"  style="background-color:#00dfff;">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> --}}
      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}

        <li class="nav-item dropdown">
              <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
              class="nav-link">
                <i class="fas fa-sign-out-alt"></i></a>
                    <form action="{{ route('admin.logout') }}" method="POST" class="d-none" id="logout-form">
                        @csrf
                    </form>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4"  style="background-color:#00dfff;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Greenleaf 3</span>
    </a>

    <div class="  pb-3 mb-3 d-flex" style="background-color:rgb(212, 219, 219)">
        <div class="image">
            @if (Auth::guard('admin')->user()->image != "")
            <img src="{{ asset('/storage/images/'.Auth::guard('admin')->user()->image )}}" height="60" width="60" class="img-circle elevation-2 ml-2 mt-1" alt="User Image')}}">
            @else
            <img src="{{ asset('/storage/images/image.png' )}}" height="60" width="60" class="img-circle elevation-2 ml-2 mt-1" alt="User Image')}}">
            @endif
        </div>
        <div class="info ml-2 ">
        <a href="" class="d-block profilename ">{{ Auth::guard('admin')->user()->firstname }}</a>
        <a href="" class="d-block profilename mt-n2">{{ Auth::guard('admin')->user()->lastname }}</a>

        </div>
      </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->
      <!----
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
    -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column  " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- - <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>--}}
          <li class="nav-item">
            <a href="{{ route('user.dashboard') }}" class="nav-link text-white">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger"></span>
              </p>
            </a>
             <hr style="background-color:rgb(236, 243, 243)">
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-white" data-toggle="modal" data-target="#AdminEditModal">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Edit Profile
                <span class="right badge badge-danger"></span>
              </p>
            </a>
             <hr style="background-color:rgb(236, 243, 243)">
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.user_edit') }}" class="nav-link text-white">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Users
                <span class="right badge badge-danger"></span>
              </p>
            </a>
             <hr style="background-color:rgb(236, 243, 243)">
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.specialist_edit') }}" class="nav-link text-white">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Specialist
                <span class="right badge badge-danger"></span>
              </p>
            </a>
             <hr style="background-color:rgb(236, 243, 243)">
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  {{ $slot }}


    {{-- -Profile Edit Modal --}}

    <div class="modal fade " wire:ignore.self id="AdminEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">


          <div class="modal-content p-3" style="border-radius: 20px;">

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Profile </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
                <form  action="{{ route('admin.edit_profile') }}" method="POST" class=" mx-auto form-group w-100"
                 enctype="multipart/form-data">
                    @csrf


                @if ($errors->any())
                <div class="alert alert-primary col-12 bg-white  mx-auto alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">
                        {{ $error }}
                    </li>
                    @endforeach

                </div>
                @endif



                <input type="hidden" name="hidden" value="{{  Auth::guard('admin')->user()->id }}">


                <div class="form-group">
                    <label for="exampleInputFile">Profile image :</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input custom-file-sm" name="image" id="exampleInputFile" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>

                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">First Name : </label>
                    <input type="text" name="firstname" id="firstname" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value="{{ Auth::guard('admin')->user()->firstname }}">

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">Last Name : </label>
                    <input type="text" name="lastname" id="lastname" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value="{{ Auth::guard('admin')->user()->lastname }}"
                      >

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">Email : </label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value="{{ Auth::guard('admin')->user()->email }}"
                        >

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">Phone Number : </label>
                    <input type="tel" name="phonenumber" id="phonenumber" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value="{{ Auth::guard('admin')->user()->phonenumber}}"
                        >

                </div>



            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-sm " data-dismiss="modal">
                <span class="btnedit"><i class="fas fa-times mt-1"></i>  Cancel</span>
              </button>

              <button type="submit"  class="btn btn-info btn-sm btn-outline-dark">
                    <span class="btnedit"><i class="fas fa-save mt-1"></i>  Save</span>
              </button>



            </div>
        </form>
          </div>

        </div>
    </div>


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>



<!-- jQuery -->
<script src="{{  asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{  asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{  asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{  asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{  asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{  asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{  asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{  asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{  asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{  asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{  asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{  asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{  asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{  asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{  asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
    $(".alert").alert();
  </script>
</body>
</html>
