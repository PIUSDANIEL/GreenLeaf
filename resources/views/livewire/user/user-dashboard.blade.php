<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:#eaeaea;">


    <!-- Main content -->
<section class="content">


        <div class="row mt-1 ">
            <h2 class="mx-auto font" style=" font-family:system-ui, sans-serif; font-weight: 200; color: darkblue;">Select a Doctor Category</h2>
        </div>



        <div class="row">
            @foreach ($specialty as $special)

        <div class="col-6 col-sm-4 col-lg-3 mt-3 " >  <a href="/doctors/{{$special->id}}"  id="" class="bg-image ml-lg-3">
            <img src="/images/{{ $special->specialization}}.png" class="img-fluid  "
        style="border-radius:33px ;"></a>
        </div>

         @endforeach

        </div>






        {{-- -Profile Edit Modal --}}

        <div class="modal fade " wire:ignore.self id="UserEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">


              <div class="modal-content p-3" style="border-radius: 20px;">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Profile </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                    <form  action="{{ route('user.edit_profile') }}" method="POST" class=" mx-auto form-group w-100"
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




                    <input type="hidden" name="hidden" id="usereditid" value="{{  Auth::guard('web')->user()->id }}">




                    <div class="form-group form-row mt-n3 mt-sm-n1">
                        <label class=" col-md-3 col-lg-3 col-form-label">First Name : </label>
                        <input type="text" name="firstname" id="firstname" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                        placeholder="" aria-describedby="helpId" value="">

                    </div>


                    <div class="form-group form-row mt-n3 mt-sm-n1">
                        <label class=" col-md-3 col-lg-3 col-form-label">Last Name : </label>
                        <input type="text" name="lastname" id="lastname" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                        placeholder="" aria-describedby="helpId" value="">

                    </div>


                    <div class="form-group form-row mt-n3 mt-sm-n1">
                        <label class=" col-md-3 col-lg-3 col-form-label">Email : </label>
                        <input type="email" name="email" id="email" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                        placeholder="" aria-describedby="helpId" value="">

                    </div>


                    <div class="form-group form-row mt-n3 mt-sm-n1">
                        <label class=" col-md-3 col-lg-3 col-form-label">Phone Number : </label>
                        <input type="tel" name="phonenumber" id="phonenumber" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                        placeholder="" aria-describedby="helpId" value="" >

                    </div>



                        <div class="form-group form-row mt-n3 mt-sm-n1">
                        <label class=" col-md-3 col-lg-3 col-form-label" for="home">Home Address</label>
                        <textarea class="form-control form-control-sm  round col-md-9 col-sm-10 "
                            name="homeaddress" id="homeaddress" rows="3"
                             >{{ Auth::guard('web')->user()->homeaddress }}</textarea>

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






   <!-- Password Modal -->
   <div class="modal fade " wire:ignore.self id="UserPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

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







            <form  action="{{  route('user.password_change') }}" method="POST" class=" mx-auto form-group w-100">
                @csrf

            <input type="hidden" name="id" value="{{  Auth::guard('web')->user()->id }}">

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


</section>

    <!-- /.content -->

    {{-- -Alerts --}}
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



<script>

        $(document).ready(function () {

            refreshuser();

           function refreshuser(){

                    var id = $('#usereditid').val();

                $.ajax({
                type: "Get",
                url: "/user/getedit_profile/"+id,
                dataType: "json",
                success: function (response) {


                    $.each(response.useredit, function (key, user) {
                        $('#firstname').val(user.firstname);
                        $('#lastname').val(user.lastname);
                        $('.first').text(user.firstname);
                        $('.last').text(user.lastname);
                        $('#email').val(user.email);
                        $('#homeaddress').val(user.homeaddress);
                        $('#phonenumber').val(user.phonenumber);
                    });
                }
                });


            }



            $('#editsubmitbtn').click(function (e) {
                e.preventDefault();




              var data = {
                'hidden': $('#usereditid').val(),
                'firstname': $('#firstname').val(),
                'lastname': $('#lastname').val(),
                'email': $('#email').val(),
                'phonenumber': $('#phonenumber').val(),
                'homeaddress': $('#homeaddress').val()
              }





              $.ajaxSetup({
                 headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
              });



              $.ajax({
                  type: "post",
                  url: "/user/edit_profile",
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
                          console.log(response.status);
                          $('#UserEditModal').modal('hide');
                          $('#UserEditModal').removeClass('show');
                          $('.modal-backdrop').remove();
                          $('.editerror').remove();
                          refreshuser();

                          swal("Profile updated successfully ","","success",{
                                button:"ok",
                          });
                      }
                  }
              });







            });
        });

</script>

</div>
  <!-- /.content-wrapper -->
