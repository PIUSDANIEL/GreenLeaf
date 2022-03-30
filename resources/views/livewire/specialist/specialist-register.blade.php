<div class="container-fluid  "  style="background-color: rgba(246, 244, 244, 0.918);">



    <div class="row login">
            <h1 class="font mx-auto">Register</h1>

    </div>

    @if ($errors->any())
    <div class="alert alert-primary col col-sm-4 bg-white  mx-auto alert-dismissible fade show" role="alert">
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



        <form  action="{{ route('specialist.specialist_register') }}" method="POST" class=" mx-auto mt-4 form-group registersubmit
             col-12  col-md-9 col-lg-5 p-3   " style="border-radius: 15px;" >

                @csrf

                <div class="form-group form-row mt-n3 mt-sm-n3  ">
                    <label class=" col-md-3 col-lg-4 col-form-label " style="color:darkblue; font-weight:bold;">First Name : </label>
                    <input type="text" name="firstname" id="firstname" class="form-control form-control-sm  round col-lg-8 col-sm-10 "
                    placeholder="" aria-describedby="helpId" :value="old('firstname')"  autocomplete="firstname">

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n3">
                    <label class=" col-md-3 col-lg-4 col-form-label " style="color:darkblue; font-weight:bold;">Last Name : </label>
                    <input type="text" name="lastname" id="lastname" class="form-control form-control-sm  round col-lg-8 col-sm-10 "
                    placeholder="" aria-describedby="helpId" :value="old('lastname')"  autocomplete="lastname">

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n3">
                    <label class=" col-md-3 col-lg-4 col-form-label " style="color:darkblue; font-weight:bold;">Email : </label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm  round col-lg-8 col-sm-10 "
                    placeholder="" aria-describedby="helpId" :value="old('email')"  autocomplete="email">

                </div>




                <div class="form-group form-row mt-n3 mt-sm-n3">
                    <label class=" col-md-3 col-lg-4 col-form-label " style="color:darkblue; font-weight:bold;">Password : </label>
                    <input type="password" name="password" id="password" class="form-control form-control-sm  round col-lg-8 col-sm-10 "
                    placeholder="" aria-describedby="helpId"    autocomplete="password">

                </div>


                <div class="form-group form-row mt-n3 mt-sm-n3">
                    <label class=" col-md-3 col-lg-4 col-form-label " style="color:darkblue; font-weight:bold;"
                    for="password_confirmation" value="{{ __('Confirm Password') }}">Retype password : </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-sm  round col-lg-8 col-sm-10 "
                    placeholder="" aria-describedby="helpId"   autocomplete="current-password">

                </div>

                <div class="form-group form-row mt-n3 mt-sm-n3">
                    <label class=" col-md-3 col-lg-4 col-form-label " style="color:darkblue; font-weight:bold;">Phone Number : </label>
                    <input type="tel" name="phonenumber" id="phonenumber" class="form-control form-control-sm  round col-lg-8 col-sm-10 "
                    placeholder="" aria-describedby="helpId" :value="old('phonenumber')"  autocomplete="phonenumber">

                </div>


                <div class="form-group form-row scroll "  >
                    <h6 style="color:darkblue; font-weight:bold;">Specialty</h6>
                  
                @foreach ($specialists as $specialist )
                    <label class="form-control check">
                        <input type="checkbox" class="registercheck" value="{{ $specialist->id}}" name="specialty[]" />
                        {{ $specialist->specialization}}
                    </label>
                @endforeach

                </div>


                <div class="form-group form-row mt-n2 mt-sm-n1  justify-content-end ">
                    <button type="submit" name="submit" class="btn px-3 py-0 round btn-white  ">
                        <span class="btnprofile">Register</span> </button>
                    </button>
                </div>



                <div class="form-group form-row mt-n4 ">
                    <a class="underline text-sm text-dark hover:text-gray-900" href="{{ route('specialist.login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>


        </form>



</div>


