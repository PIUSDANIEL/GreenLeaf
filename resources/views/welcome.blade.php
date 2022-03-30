<!DOCTYPE html 5>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>greenleaf</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

        <!--Sweet alert---->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="{{ asset('css/greenleaf.css') }}">

                <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



        <!---jquery----->


    @livewireStyles

</head>

<body class=""  style="background-color:#00dfff;">

    <!-- for bigger screen--->
    <nav class="navbar navbar-expand-sm navbar-light  fixed-top mb-5"  style="background-color:#00dfff;" id="nav-bigscreen">
        <button class="navbar-toggler mr-0 ml-0 p-0  d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand  mr-0 ml-0" href="#">Logo</a>

        <div class="collapse navbar-collapse" id="collapsibleNavId">

          <ul class="navbar-nav ml-0 ml-md-6 ml-lg-3  ">
            <li class="nav-item active">
              <a class=" bigscreentext" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class=" bigscreentext" href="#">About Us</a>
            </li>

            <li class="nav-item">
              <a class=" bigscreentext" href="#">Contact Us</a>
            </li>
            <!----
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Action 1</a>
                <a class="dropdown-item" href="#">Action 2</a>
              </div>
            </li>
            --->
          </ul>

            <form class="form-inline">
                <div class="form-group">
                   
                    <input type="text" name="search" id="" class="form-control form-control-sm w-100" placeholder="" aria-describedby="helpId">
                    
                </div>
            </form>
              <i class="fas fa-search bigscreentext ml-4 ff"></i>

            {{-- -
           <form class="form-inline ml-0 ml-md-6 ml-lg-3 border ">
            <input class="form-control form-control-sm mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-sm btn-outline-white my-2 my-sm-0" type="submit">Search</button>
           </form>
          --}}
         </div>

            {{--

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('user/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('user.login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('user.register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            --}}

            @if (Auth::guard('web')->user())


                    <a href="{{ route('user.logout') }}" class="btn btn-sm  btn-outline-white round p-0"
                    onclick=" event.preventDefault();document.getElementById('logout-form').submit(); " >
                    <span class="btnprofile">Logout</span></a>
                    <form id="logout-form" action="{{ route('user.logout') }} " method="POST">
                        @csrf
                    </form>


                <a href="{{ route('user.dashboard') }}" class=" ">
                    <button class="btn btn-sm  btn-outline-white round p-0">
                    <span class="btnprofile">profile</span> </button>
                </a>

            @elseif (Auth::guard('admin')->user())

                <a href="{{ route('admin.logout') }}" class="btn btn-sm  btn-outline-white round p-0"
                onclick=" event.preventDefault();document.getElementById('logout-form').submit(); " >
                <span class="btnprofile">Logout</span></a>
                <form id="logout-form" action="{{ route('admin.logout') }} " method="POST">
                    @csrf
                </form>


                <a href="{{ route('admin.dashboard') }}" class=" ">
                    <button class="btn btn-sm  btn-outline-white round p-0">
                    <span class="btnprofile">profile</span> </button>
                </a>

             @elseif (Auth::guard('specialist')->user())

                <a href="{{ route('specialist.logout') }}" class="btn btn-sm  btn-outline-white round p-0"
                onclick=" event.preventDefault();document.getElementById('logout-form').submit(); " >
                <span class="btnprofile">Logout</span></a>
                <form id="logout-form" action="{{ route('specialist.logout') }} " method="POST">
                    @csrf
                </form>


                <a href="{{ route('specialist.dashboard') }}" class=" ">
                    <button class="btn btn-sm  btn-outline-white round p-0">
                    <span class="btnprofile">profile</span> </button>
                </a>
             @else

                <div class="btn-group">
                    <button class="btn btn-outline-white round dropdown-toggle p-1 " type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="btnprofile">Login </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right round shadow" aria-labelledby="triggerId">

                        <a class="dropdown-item" href="{{ route('user.login') }}" ><i class="fas fa-users mr-2 text-primary"></i>Login as a patient</a>

                        <a href="{{ route('specialist.login') }}" class="dropdown-item "><i class="fas fa-user-md mr-2 text-success"></i>Login as a Doctor</a>
                    </div>
                </div>


                <div class="btn-group">
                    <button class="btn btn-outline-white round dropdown-toggle p-1 " type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="btnprofile">Register </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right round shadow" aria-labelledby="triggerId">

                        <a class="dropdown-item" href="{{ route('user.register') }}" ><i class="fas fa-users mr-2 text-primary"></i>Register as a patient</a>

                        <a href="{{ route('specialist.register') }}" class="dropdown-item "><i class="fas fa-user-md mr-2 text-success"></i>Register as a Doctor</a>
                    </div>
                </div>

            @endif



    </nav>




    <!---for smaller screen---->

    <nav class=" navbar fixed-top" style="background-color:#00dfff;" id="nav-smallscreen">
                <!-- Button trigger modal -->
                <span class="ml-2 " ><i class="fas fa-bars  "
                    data-toggle="modal" data-target="#modelId" style="font-size: 24px; ">
                    </i>
                </span>

                @if (Auth::guard('web')->user())


                <span class="float-right">  <a href="{{ route('user.logout') }}" class="btn btn-sm  btn-outline-white round p-0"
                onclick=" event.preventDefault();document.getElementById('logout-form').submit(); " >
                <span class="btnprofile">Logout</span></a> </span>
                <form id="logout-form" action="{{ route('user.logout') }} " method="POST">
                    @csrf
                </form>


                <span class="float-right"> <a href="{{ route('user.dashboard') }}" class=" ">
                <button class="btn btn-sm  btn-outline-white round p-0">
                <span class="btnprofile">profile</span> </button>
                 </a>
                </span>

        @elseif (Auth::guard('admin')->user())

        <span class="float-right"><a href="{{ route('admin.logout') }}" class="btn btn-sm  btn-outline-white round p-0"
            onclick=" event.preventDefault();document.getElementById('logout-form').submit(); " >
            <span class="btnprofile">Logout</span></a>
        </span>
            <form id="logout-form" action="{{ route('admin.logout') }} " method="POST">
                @csrf
            </form>


            <span class="float-right"><a href="{{ route('admin.dashboard') }}" class=" ">
                <button class="btn btn-sm  btn-outline-white round p-0">
                <span class="btnprofile">profile</span> </button>
            </a>
            </span>

         @elseif (Auth::guard('specialist')->user())

         <span class="float-right"> <a href="{{ route('specialist.logout') }}" class="btn btn-sm  btn-outline-white round p-0"
            onclick=" event.preventDefault();document.getElementById('logout-form').submit(); " >
            <span class="btnprofile">Logout</span></a>
         </span>
            <form id="logout-form" action="{{ route('specialist.logout') }} " method="POST">
                @csrf
            </form>


            <span class="float-right">   <a href="{{ route('specialist.dashboard') }}" class=" ">
                <button class="btn btn-sm  btn-outline-white round p-0">
                <span class="btnprofile">profile</span> </button>
            </a>
            </span>
         @else

            <div class="btn-group float-right ">
                <span> <button class="btn btn-outline-white round dropdown-toggle p-1 " type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="btnprofile">Login </span>
                </button>
                <span>

                <div class="dropdown-menu dropdown-menu-right round shadow" aria-labelledby="triggerId">

                    <a class="dropdown-item" href="{{ route('user.login') }}" ><i class="fas fa-users mr-2 text-primary"></i>Login as a patient</a>

                    <a href="{{ route('specialist.login') }}" class="dropdown-item "><i class="fas fa-user-md mr-2 text-success"></i>Login as a Doctor</a>
                </div>
            </div>


            <div class="btn-group float-right">
                <span> <button class="btn btn-outline-white round dropdown-toggle p-1 " type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="btnprofile">Register </span>
                </button>
                 <span>
                <div class="dropdown-menu dropdown-menu-right round shadow" aria-labelledby="triggerId">

                    <a class="dropdown-item" href="{{ route('user.register') }}" ><i class="fas fa-users mr-2 text-primary"></i>Register as a patient</a>

                    <a href="{{ route('specialist.register') }}" class="dropdown-item "><i class="fas fa-user-md mr-2 text-success"></i>Register as a Doctor</a>
                </div>
            </div>

        @endif

    </nav>



              <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog " role="document">

                        <div class="modal-content  h-75" style="border-radius: 20px; ">
                                <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" style="font-size: 45px; font-weight:lighter; color:#00dfff; ">&times;</span>
                                            </button>
                                    </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <ul class="navbar-nav mx-auto  ">
                                        <li class="nav-item active mx-auto">
                                          <h1 class=""><a class=" ff " href="{{ route('/')}}">Home <span class="sr-only">(current)</span></a>
                                          </h1>
                                        </li>
                                        <li class="nav-item mx-auto">
                                          <h1><a class=" ff" href="#">About Us</a>
                                          </h1>
                                        </li>


                                        <li class="nav-item mx-auto">
                                          <h1><a class=" ff" href="#">Contact Us</a>
                                          </h1>
                                        </li>

                                        <!----
                                        <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                          <div class="dropdown-menu" aria-labelledby="dropdownId">
                                            <a class="dropdown-item" href="#">Action 1</a>
                                            <a class="dropdown-item" href="#">Action 2</a>
                                          </div>
                                        </li>
                                        --->
                                      </ul>


                                          <!------  <i class="fas fa-search ml-4 ff"></i> -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    $('#exampleModal').on('show.bs.modal', event => {
                        var button = $(event.relatedTarget);
                        var modal = $(this);
                        // Use above variables to manipulate the DOM

                    });
                </script>







        {{-- -ALERTS --}}
            @if (session('nodoctor'))
                <script>
                    swal("No Doctor","{!! session('nodoctor') !!}","info",{

                        button:"ok",
                    });
                </script>
            @endif





    {{ $slot }}


    @livewireScripts




        <script>

            $(document).ready(function () {
                special(id);
               function special(id){

                    $.ajax({
                            type: "Get",
                            url: "/specialistprofile/"+id,
                            //data: "data",
                            dataType: "json",
                            success: function (response) {
                                console.log(response.specialists)
                               // $('#Modal').modal('toggle');
                            }
                        });

                }





            });
        </script>

        <!-- Optional JavaScript -->
        <!-- Select2 -->
        <script src="{{ asset('plugins/select2/js/select2.full.min.js')}}"></script>

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

<script src="{{ asset('js/greenleaf.js') }}"></script>
  </body>
  </html>
