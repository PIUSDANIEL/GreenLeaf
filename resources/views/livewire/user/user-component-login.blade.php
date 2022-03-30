<div class="container-fluid  mh-100 " >



    <div class="row login ">
            <h1 class="font mx-auto">Login</h1>

    </div>



    {{--
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
     --}}
     @if ( session('error') )
     <div class="alert alert-primary col-12 col-sm-4  mx-auto alert-dismissible fade show" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             <span class="sr-only">Close</span>
         </button>
         <strong class="text-danger"> {{ session('error') }} !</strong>
     </div>
     @endif

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


        <form  action="{{ route('user.user_login') }}" method="POST"
        class="mx-auto mt-4 form-group col-9  col-sm-4" autocomplete="off" >
                @csrf

            <div class="form-group form-row mt-n3 mt-sm-n1">
                <label class=" col-md-3 col-lg-3 col-form-label" for="email" value="{{ __('Email') }}">Email : </label>
                <input type="email"  :value="old('email')" name="email" id=""
                    class="form-control form-control-sm  round col-md-9 col-sm-10 "
                    placeholder="" aria-describedby="helpId"  autofocus>

                    <small id="helpId" class="form-text text-danger mx-auto mt-n4">
                        @error('email')
                           {{ $message }}
                       @enderror
                   </small>
            </div>

            <div class="form-group form-row mt-n3 mt-sm-n1">
                <label class=" col-md-3 col-lg-3 col-form-label">Password : </label>
                <input type="password" name="password" id="password" class="form-control form-control-sm  round col-md-9 col-sm-10 "
                placeholder="" aria-describedby="helpId"   ">

                <small id="helpId" class="form-text text-danger mx-auto mt-n4">
                    @error('password')
                       {{ $message }}
                   @enderror
               </small>
            </div>



            <div class="form-group form-row mt-n2  mt-sm-n1   ">
                <div class="col-7 col-sm-8">

                    <div class="mt-2 mt-sm-3">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                        <label for="remember">
                          Remember me
                        </label>
                    </div>

                </div>

                <div class="col-5 col-sm-4">

                    <button type="submit" name="submit" class="btn px-3 py-0 round btn-white ">
                        <span class="btnprofile">Log in</span> </button>
                    </button>
                </div>
            </div>



            <div class="form-group form-row mt-lg-4 ">
                <div class="col-5">
                    @if (Route::has('password.request'))
                    <a class="small mt-1" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
                <div class="col-7">
                    <a class=" ml-lg-4 mt-1 small" href="{{ route('user.register') }}">
                    Dont have an account? Create one
                    </a>
                </div>

            </div>


        </form>



</div>


