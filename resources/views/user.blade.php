<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Greenleaf</title>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

     <!--Sweet alert---->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <link rel="stylesheet" href="{{ asset('css/greenleaf.css') }}">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">

   <!-- DataTables -->
   <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

   @livewireStyles
</head>
<body class="hold-transition sidebar-mini" style="background-color:#00dfff;">
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
<div class="wrapper">

    @if (session('success'))

    <script>
        swal("Welcome","{!! session('success') !!}","success",{
            button:"ok",
        });
    </script>

    @endif

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-light"   style="background-color:rgb(236, 243, 243)">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars sidebartext"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="{{ route('/') }}" class="nav-link "></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search sidebartext"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search sidebartext"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times sidebartext"></i>
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
              <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
              class="nav-link dashbordhome" style="color:darkblue;">
                Logout </a>
                    <form action="{{ route('user.logout') }}" method="POST" class="d-none" id="logout-form">
                        @csrf
                    </form>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt sidebartext"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large sidebartext"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background-color:#00dfff;">
    <!-- Brand Logo -->
   {{--   <a href="index3.html" class="brand-link" style="background-color:rgb(178, 182, 182)">
      <img src="{{ asset('dist/img/AdminLTELogo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Greenleaf 3</span>
    </a>
--}}

<!-- Sidebar user panel (optional) -->
    <div class="  pb-3 mb-3 d-flex" style="background-color:rgb(212, 219, 219)">
      <div class="image img">
          @if (Auth::guard('web')->user()->image != "")
          <img src="{{ url('/storage/images/'.Auth::guard('web')->user()->image )}}" height="60" width="60" class="img-circle elevation-2 ml-2 mt-1" alt="User Image">
          @else
          <img src="{{ asset('/storage/images/image.png' )}}" height="60" width="60" class="img-circle elevation-2 ml-2 mt-1" alt="User Image">
          @endif
      </div>
      <div class="info ml-2 ">
        <a href="" class="d-block profilename first "></a>
        <a href="" class="d-block profilename last mt-n2"></a>
        

            <div class="alert alert-dismissible fade show
                     col  ml-n1 d-none shadow p-2 rounded" id="profileimg" role="alert" style="background-color:#00dfff;">
                    <button type="button" class="close imgclose">
                        <span class="bg-white rounded-circle px-2" aria-hidden="true">&times;</span>
                    </button>

                <form class="" action="{{ route('user.edit_profile_image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="id" value="{{ Auth::guard('web')->user()->id }}">

                    <input type="file" name="image" id="" class="w-75">

                    <button class="btn btn-sm btn-light  ">Update</button>
                </form>


            </div>

            <script>
              $(".alert").alert();
            </script>

      </div>
        <div class="col-5 ml-3 h-25 shadow  img" style="background-color:#00dfff; border-radius: 12px 0 0 12px; cursor:pointer;">
             <p class="text-right sidebartext" style="cursor: pointer;">Edit image</p>
        </div>
    </div>


    <!-- Sidebar -->
    <div class="sidebar" >

   {{-- -  <!-- SidebarSearch Form -->
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
    --}}
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column rounded" data-widget="treeview" role="menu" data-accordion="false">
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
            <a href="{{ route('user.dashboard') }}" class="nav-link ">
              <i class="nav-icon fas fa-user sidebartext"></i>
              <p class="sidebartext">
                Profile
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <hr style="background-color:rgb(236, 243, 243)">
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link "  data-toggle="modal" data-target="#UserEditModal" >
              <i class="nav-icon fas fa-user-edit sidebartext"></i>
              <p class="sidebartext">
               Edit Profile
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <hr style="background-color:rgb(236, 243, 243)">
          </li>

          <li class="nav-item">
            <a href="{{ route('user.logout') }}" class="nav-link " onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                     >
                    <i class="nav-icon fas fa-sign-out-alt sidebartext"></i>
                    <p class="sidebartext">
                      Logout 
                    </p>
            </a>
                <form action="{{ route('user.logout') }}" method="POST" class="d-none" id="logout-form">
                    @csrf
                </form>
            <span class="right badge badge-danger"></span>
        <hr style="background-color:rgb(236, 243, 243)">
      </li>

          <li class="nav-item">
            <a href="#" class="nav-link " data-toggle="modal" data-target="#UserPasswordModal">
              <i class="nav-icon fas fa-key sidebartext"></i>
              <p class="sidebartext">
               Change Password
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

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong class="sidebartext">Copyright &copy; 2014-2021 <a href="https://Greenleaf.com" class="sidebartext">GreenLeaf</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@livewireScripts
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

<!-- Select2 -->
<script src="{{  asset('plugins/select2/js/select2.full.min.js')}}"></script>

<!-- bs-custom-file-input -->
<script src="{{  asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{  asset('dist/js/demo.js')}}"></script>

<script src="{{  asset('plugins/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>


<script>
    $('#profileimg').hide();

   $(document).ready(function () {
       $('.img').click(function (e) {
           e.preventDefault();

         $('.profilename').removeClass('d-block');
         $('#profileimg').toggle();
         $('#profileimg').removeClass('d-none');

         $('.profilename').toggle();
         $('.img').toggle();
       });

       $('.imgclose').click(function (e) {
         e.preventDefault();

           $('.profilename').addClass('d-block');

          $('#profileimg').toggle();
         $('.profilename').toggle();
         $('.img').toggle();
       });
   });




</script>



<!-- bs-custom-file-input -->

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


<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>

<script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>

<script src="{{ asset('js/greenleaf.js') }}"></script>
</body>
</html>
