

<div class="content-wrapper" >

    @if($ttt == 1)

    <section class="content mt-3">

       <!-- Default box -->
       <div class="card">
         <div class="card-header">
           <h3 class="card-title">Title</h3>

           <div class="card-tools">
             <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
               <i class="fas fa-minus"></i>
             </button>
             <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
               <i class="fas fa-times"></i>
             </button>
           </div>
         </div>
         <div class="card-body">

            <div class="mx-auto col-sm-7">
                <div class="card card-outline card-primary">
                  <div class="card-header text-center">
                    <a href="" class="h1 text-info"><b>Green</b>leaf</a>
                  </div>
                  <div class="card-body">

                        @if($errors->any())
                             <ul class="rounded bg-danger">
                              @foreach ($errors->all() as $error )
                                <li class="text-white ">{{ $error }}</li>
                              @endforeach
                            </ul>
                        @endif


                      @if (session('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('fail') }}</strong>
                        </div>

                        <script>
                        $(".alert").alert();
                        </script>
                      @endif

                    <form action="{{ route('specialist.office') }}"  method="POST" >
                        @csrf
                        @method('PUT')
                       <input type="hidden" name="hiddenid" value="{{ Auth::guard('specialist')->user()->id }}">

                      <div class="form-group form-row mt-n3 mt-sm-n1">
                        <label class=" col-md-3 col-lg-3 col-form-label" for="officeaddress">Office Address</label>
                        <textarea class="form-control form-control-sm  round col-md-9 col-sm-10 "
                         name="officeaddress" id="officeaddress" rows="3" :value="old('officeaddress')"  autocomplete="officeaddress"
                         ></textarea>

                      </div>

                      <div class="form-group form-row mt-n3 mt-sm-n1">
                        <label class=" col-md-3 col-lg-3 col-form-label" for="homeaddress">Home Address</label>
                        <textarea class="form-control form-control-sm  round col-md-9 col-sm-10 "
                         name="homeaddress" id="homeaddress" rows="3" :value="old('homeaddress')"  autocomplete="homeaddress"
                        ></textarea>

                      </div>

                      <div class="row">

                        <!-- /.col -->
                        <div class="col-11 ">
                          <button type="submit" class="btn btn-info px-5 py-0 float-right ">Save</button>
                        </div>
                        <!-- /.col -->
                      </div>
                    </form>




                  </div>
                  <!-- /.form-box -->
                </div><!-- /.card -->
              </div>


         </div>
         <!-- /.card-body -->

         <!-- /.card-footer-->
       </div>
       <!-- /.card -->

     </section>
   @endif

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid bordered" >

        @if (session('office'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ session('office') }}</strong>
            </div>

            <script>
              $(".alert").alert();
            </script>
        @endif

        @if (session('pharm'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{{ session('pharm') }}</strong>
        </div>

        <script>
          $(".alert").alert();
        </script>
    @endif

    @if (session('imagefailed'))
        <script>
            swal("Image upload failed","{!! session('imagefailed') !!}","error",{
                button:"ok",
            });
        </script>
    @endif

    @if (session('imagesuccess'))
        <script>
            swal("Image upload successfull","{!! session('imagesuccess') !!}","success",{
                button:"ok",
            });
        </script>
    @endif






        <div class="row" >



          <div class="col-6 col-md-4 col-lg-3 ">

            <img src="{{ asset('images/rating.png') }}" class=" img-fluid mx-auto d-block">
            <span class="card-img-overlay"><h6 class="float-right text-white mr-2 rounded-circle  p-1 mr-sm-4"
              style="background-color:darkgray ;">77</h6></span>

            </div>

          <div class="col-6 col-md-4 col-lg-3 ">
            <a href="{{ route('/') }}">
            <img src="{{ asset('images/view.png') }}" class=" img-fluid mx-auto d-block">
            <span class="card-img-overlay"><h6 class="float-right text-white mr-2 rounded-circle  p-1 mr-sm-4"
              style="background-color:darkgray ;" >98</h6></span>
            </a>
            </div>


          <div class="col-6 col-md-4 col-lg-3 ">
            <a href="{{ route('/') }}">
            <img src="{{ asset('images/review.png') }}" class=" img-fluid mx-auto d-block">
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3 ">
            <a href="{{ route('/') }}">
            <img src="{{ asset('images/patients.png') }}" class=" img-fluid mx-auto d-block">
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3 ">
            <a href="{{ route('/') }}">
            <img src="{{ asset('images/history.png') }}" class=" img-fluid mx-auto d-block">
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3 ">
            <a href="{{ route('/') }}">
            <img src="{{ asset('images/appointment.png') }}" class=" img-fluid mx-auto d-block">
            </a>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

            @if (session('edited'))

            <script>
                swal("Updated","{!! session('edited') !!}","success",{
                    button:"ok",
                });
            </script>

            @endif


            @if (session('edited_failed'))

            <script>
                swal("","{!! session('edited_failed') !!}","fail",{
                    button:"ok",
                });
            </script>

            @endif


     <!-- Edit Modal -->
<div class="modal fade "  id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modaledit">





        <div class="modal-content p-3" style="border-radius: 20px;" >

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Profile </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

        <div class="modal-body">

          <form  action="{{ route('specialist.edit_profile') }}" method="POST" class=" mx-auto form-group w-100"
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

                <div class="alert alert-primary col-12 bg-white  mx-auto alert-dismissible fade show d-none editalert " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>

                    <p class="editerror"></p>

                </div>






                <input type="hidden" name="hidden" id="specialisteditid" value="{{  Auth::guard('specialist')->user()->id }}">




                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">First Name : </label>
                    <input type="text" name="firstname" id="firstname" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value="">

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">Last Name : </label>
                    <input type="text" name="lastname" id="lastname" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value=""
                      >

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">Email : </label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value=""
                        >

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label">Phone Number : </label>
                    <input type="tel" name="phonenumber" id="phonenumber" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" value=""
                        >

                </div>

                <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label" for="office">Office Address</label>
                    <textarea class="form-control form-control-sm  round col-md-9 col-sm-10 "
                        name="officeaddress" id="officeaddress" rows="3" value="{{ Auth::guard('specialist')->user()->officeaddress }}"

                    >{{ Auth::guard('specialist')->user()->officeaddress }}</textarea>

                    </div>

                    <div class="form-group form-row mt-n3 mt-sm-n1">
                    <label class=" col-md-3 col-lg-3 col-form-label" for="home">Home Address</label>
                    <textarea class="form-control form-control-sm  round col-md-9 col-sm-10 "
                        name="homeaddress" id="homeaddress" rows="3"
                        >{{ Auth::guard('specialist')->user()->homeaddress }}</textarea>

                    </div>

                    <h6 class=""><b>Specialty</b></h6>
                    <div class="form-group form-row scroll "  >


                      @foreach ($specialty as $specialis )

                                <label class="form-control check">
                                    <input
                                    @if ( in_array($specialis->id ,   $specialty_role_id))
                                        checked
                                    @endif
                                    type="checkbox" class="speciality" id="{{ $specialis->specialization}}"
                                    value="{{ $specialis->id}}" name="specialty[]"  />
                                    {{ $specialis->specialization}}
                                </label>

                      @endforeach

                    </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-sm " data-dismiss="modal">
                <span class="btnedit"><i class="fas fa-times mt-1"></i>  Cancel</span>
              </button>

              <button type="submit"  class="btn btn-info btn-sm btn-outline-info" id="editsubmitbtn">
                    <span class="btnedit"><i class="fas fa-save mt-1"></i>  Save</span>
              </button>



            </div>
        </form>
      </div>

    </div>
</div>


          @if ($errors->any())

          <script>
              swal("Failed","","error",{
                  button:"ok",
              });
          </script>

          @endif

          @if (session('password_error'))

          <script>
              swal("Password change failed","{!! session('password_error') !!}","error",{
                  button:"ok",
              });
          </script>

          @endif





   <!-- Password Modal -->
<div class="modal fade " wire:ignore.self id="PasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable">

      <div class="modal-content p-3" style="border-radius: 20px;">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Password </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>



        <div class="modal-body">

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

          <div class="passwordediterror">
            <ul class="">

            </ul>
        </div>







            <form  action="{{  route('specialist.password_change') }}" method="POST" class=" mx-auto form-group w-100">
                @csrf

            <input type="hidden" name="id" value="{{  Auth::guard('specialist')->user()->id }}">

            <div class="form-group form-row mt-n3 mt-sm-n1">
                <label class=" col-md-3 col-lg-3 col-form-label" for="oldpassword" value="{{ __('oldpassword') }}">Old password : </label>
                <input type="password"  :value="old('oldpassword')" name="oldpassword" id=""
                    class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId" required >


            </div>

            <div class="form-group form-row mt-n3 mt-sm-n1">
                <label class=" col-md-3 col-lg-3 col-form-label">New Password : </label>
                <input type="password" name="password" id="password" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                placeholder="" aria-describedby="helpId" required  >


            </div>

            <div class="form-group form-row mt-n3 mt-sm-n1">
                <label class=" col-md-3 col-lg-3 col-form-label">Confirm Password : </label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                placeholder="" aria-describedby="helpId" required  >


            </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info btn-sm " data-dismiss="modal">
            <span class="btnedit"><i class="fas fa-times mt-1"></i>  Cancel</span>
          </button>

          <button type="submit"  class="btn btn-info btn-sm btn-outline-info submit">
                <span class="btnedit"><i class="fas fa-key mt-1"></i> Change</span>
          </button>



        </div>
    </form>
      </div>

    </div>
</div>






<script>

    $(document).ready(function () {

        refreshspecialist();

       function refreshspecialist(){

                var id = $('#specialisteditid').val();
            $.ajax({
            type: "Get",
            url: "/specialist/getedit_profile/"+id,
            dataType: "json",
            success: function (response) {
                console.log(response.specialedit);

                $.each(response.specialedit, function (key, specialist) {
                    $('#firstname').val(specialist.firstname);
                    $('#lastname').val(specialist.lastname);
                    $('.first').text(specialist.firstname);
                    $('.last').text(specialist.lastname);
                    $('#email').val(specialist.email);
                    $('#officeaddress').val(specialist.officeaddress);
                    $('#homeaddress').val(specialist.homeaddress);
                    $('#phonenumber').val(specialist.phonenumber);
                });
            }
            });


        }



        $('#editsubmitbtn').click(function (e) {
            e.preventDefault();

            var specialty = [];

            $.each($(".speciality:checked"), function(){
                specialty.push($(this).val());
            });


          var data = {
            'hidden': $('#specialisteditid').val(),
            'firstname': $('#firstname').val(),
            'lastname': $('#lastname').val(),
            'email': $('#email').val(),
            'phonenumber': $('#phonenumber').val(),
            'specialty' : specialty,
            'officeaddress': $('#officeaddress').val(),
            'homeaddress': $('#homeaddress').val()
          }

          console.log(data.image);



          $.ajaxSetup({
             headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });



          $.ajax({
              type: "post",
              url: "/specialist/edit_profile",
              data: data,
              dataType: "json",
              success: function (response) {

                  if(response.status == 400){

                    $('.editerror').html("");
                    $('.editalert').removeClass('d-none');
                    $.each(response.errors, function (key, error_val) {
                         $('.editerror').append('<li style="color:red;">'+ error_val +'</li>');
                    });

                    swal(" Please check your details ","","error",{
                            button:"ok",
                      });

                  }else{
                      $('#EditModal').modal('hide');
                      $('#EditModal').removeClass('show');
                      $('.modal-backdrop').remove();
                      refreshspecialist();

                      swal("Profile updated successfully ","","success",{
                            button:"ok",
                      });
                  }
              }
          });







        });
    });

</script>


    <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->
