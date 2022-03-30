<div class="container-fluid  mh-100 " style="background-color:#00dfff;">

    <div class="row bg-image ">

        <img src="{{asset('images/font.jpg')}}" class="img-fluid" width="100%">

    </div>






    <div class="row mt-1">
        <h2 class="mx-auto font">Select a Doctor Category</h2>
    </div>

    @if (session('notlogged'))

        <script>
            swal("","{!! session('notlogged') !!}","error",{
                button:"ok",
            });
        </script>

    @endif









    <div class="row ">
        @foreach ($specialty as $special)

        <div class="col-6 col-sm-4 col-lg-3 mt-3 " >  <a href="/doctors/{{$special->id}}"  id="" class="bg-image ml-lg-3">
            <img src="/images/{{ $special->specialization}}.png" class="img-fluid  specialty_image"
        style="border-radius:33px ;"></a></div>

        @endforeach

    </div>




</div>


