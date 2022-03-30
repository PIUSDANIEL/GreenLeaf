<div class="container-fluid  mh-100 " style="background-color:#00dfff;">

            <div class="row bg-image ">

                <img src="{{asset('images/font.jpg')}}" class="img-fluid" width="100%">

            </div>




            <div class="row mt-1">
                @if (count($specialists) > 0)
                    <h2 class="mx-auto font">Select a  Category</h2>

                @endif


            </div>


        <div class="row mx-auto  " style="width: 90%;">

                @foreach ($specialists as $specilist )


                        <a href="javascript:void(0)" onclick="special({{ $specilist->user_specialistid }})" class="col-md-6 col-lg-4 mt-4 spec">
                            <div class="row ">
                            @if ($specilist->image != "")
                                    <img src="{{ asset('/storage/images/'.$specilist->image) }}"
                                    class="medimage rounded-circle ml-3">
                                @else
                                    <img src="{{ asset('images/image.png') }}"
                                    class="medimage rounded-circle ml-3">
                            @endif

                                <div class="col-9 bg-white" style="border-radius: 10px;">
                                    <h6 class="medname mt-1">{{ $specilist->title  }} {{ $specilist->firstname }} {{  $specilist->lastname  }} </h6>
                                    <p class="text-primary medsp mt-n2">{{  $specilist->specialization  }}</p>
                                    <p class="text-primary medoffi  mt-n3">Eminence great people hospita </p>
                                    <span class="float-right mt-n4">
                                        <i class="fas fa-star text-warning "></i>
                                        <i class="fas fa-star text-warning "></i>
                                        <i class="fas fa-star text-warning "></i>
                                        <i class="fas fa-star text-warning "></i>
                                        <i class="fas fa-star text-warning "></i>
                                    </span>
                                </div>
                            </div>
                        </a>


            @endforeach





        </div>




                <!-- Modal -->
                <div class="modal fade " id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl pp specialistmodal" style="border-radius: 20px;" >
                    <div class="modal-content " style="border-radius: 20px;">

                        <div class="modal-body">

                            <div class="container-fluid mt-n2 ">

                                <div class="row ">
                                    {{-- -image --}}
                                    <div class=" col-3  col-lg-2    img" >

                                        <img src="ima.jpg" class="specialitimg  rounded-circle " style="width: 80px; height:80px;" />
                                    </div>


                                    <div class="col-9 col-lg-10 d-flex justify-content-end ">
                                        <div class="row p-n4">
                                            <div class=" col-4  col-sm-4 p-n4   ">
                                                <a href="{{ route('/') }}" class="p-n2">
                                                <img src="{{ asset('images/rating.png') }}" class="img-fluid" width="100px" height="100px">
                                                </a>
                                            </div>

                                            <div class=" col-4  col-sm-4 p-n4    ">
                                                <a href="{{ route('/') }}" class="p-n2">
                                                <img src="{{ asset('images/rating.png') }}" class="img-fluid" width="100px" height="100px">
                                                </a>
                                            </div>

                                            <div class=" col-4  col-sm-4 p-n4   ">
                                                <a href="{{ route('/') }}" class="p-n2">
                                                <img src="{{ asset('images/review.png') }}" class="img-fluid" width="100px" height="100px">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="row    name">
                                    <div class="col   mt-lg-n3">
                                        <h4 class=" " id="firstname" style="color: #0b0334; line-height:0.7; font-family: 'Poppins', sans-serif;"></h4>
                                        <h4 class="" id="lastname" style="color: #0b0334; line-height:0.7; font-family: 'Poppins', sans-serif;"> </h4>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col ">
                                        <h6 class="specialty w-75">Specialization: </h6>
                                    </div>
                                </div>





                                <div class="row px-3 pt-1">
                                    <h6>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, quos.
                                         Alias, magnam eum quae unde atque fuga tenetur, saepe quod debitis molestiae deleniti
                                         perspiciatis, omnis iure consequuntur velit magni quidem!
                                         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, quos.
                                    </h6>
                                </div>

                                <div class="row mx-auto justify-content-center  ">
                                    <div class="col-5 col-md-4 col-lg-3  contact-but" >
                                        <h5 class=" text-center w-sm-75 " style=" cursor:pointer; border-radius: 10px; background-color:#00dfff;">Contact me</h5>
                                    </div>
                                    <div class="col-5 col-md-4 col-lg-3  cancel" data-dismiss="modal" aria-label="Close">
                                        <h5 class=" text-center  w-sm-50" style="border-radius: 10px; background-color:#00dfff;">cancel</h5>
                                    </div>
                                </div>

                                <div class="row mx-auto   py-1 contact " style="border-radius: 10px; background-color:rgb(231, 231, 231);">
                                    <div class="col-12 col-sm-8 mt-2">
                                    <p class="phone"></p>
                                    <p class="email mt-n3"> </p>
                                    <p class="address mt-n3"></p>
                                    </div>

                                    <div class="col-12 mt-3 mt-sm-0 col-sm-4" style=" cursor:pointer;" data-toggle="modal" data-target="#modelIdrating">
                                        <p class="mb-1">Happy with my services?</p>
                                        <span><i class="fas fa-thumbs-up " style="font-size:20px; "></i>  Yes</span>  <span><i class="fas fa-thumbs-down ml-2" style="font-size:20px; "></i>  No</span>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>
                    </div>
                </div>






        <!-- Modal -->
        <div class="modal fade mt-2 " id="modelIdrating" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg reviewmodal" role="document" style="border-radius: 20px;">
                <div class="modal-content" style="border-radius: 20px; background-color: #e7edee ">

                        <div class="modal-body mb-n4">
                            <div class="container-fluid">

                                    <form action="{{ route('user.review') }}" method="Post" class="mt-n3" >
                                            @csrf

                                            @if (Auth::guard('specialist')->check())
                                            <input type="hidden" class="form-control" name="patientsid" id="patientsid" value="{{ Auth('specialist')->user()->id }}" placeholder="">
                                            @elseif (Auth::guard('admin')->check())
                                            <input type="hidden" class="form-control" name="patientsid" id="patientsid" value="{{ Auth('admin')->user()->id }}" placeholder="">
                                            @elseif (Auth::guard('web')->check())
                                            <input type="hidden" class="form-control" name="patientsid" id="patientsid" value="{{ Auth('web')->user()->id }}" placeholder="">
                                            @else

                                            @endif




                                            <input type="hidden" class="form-control" name="speciaistid" id="speciaistid"  placeholder="">



                                        <div class="col-12 mt-n5 mt-sm-n4"><h5 class="text-center">Rate me</h5></div>

                                        <div class="rating_error bg-white"></div>

                                        <div class="rating-css mt-n4">
                                            <div class="star-icon">
                                                <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                <label for="rating1" class="fa fa-star"></label>
                                                <input type="radio" value="2" name="product_rating" id="rating2">
                                                <label for="rating2" class="fa fa-star"></label>
                                                <input type="radio" value="3" name="product_rating" id="rating3">
                                                <label for="rating3" class="fa fa-star"></label>
                                                <input type="radio" value="4" name="product_rating" id="rating4">
                                                <label for="rating4" class="fa fa-star"></label>
                                                <input type="radio" value="5" name="product_rating" id="rating5">
                                                <label for="rating5" class="fa fa-star"></label>
                                            </div>
                                        </div>

                                        <div class="row d-flex justify-content-around mt-1 mb-1 patient-experience ">

                                            <input type="radio" name="experience" class="experience" value="Excellent" id="Excellent" checked />
                                            <label for="Excellent">Excellent</label>

                                            <input type="radio" name="experience" class="experience" value="Very Happy" id="Very" />
                                            <label for="Very"><p>Very happy</p></label>

                                            <input type="radio" name="experience" class="experience" value="Happy" id="Happy" />
                                            <label for="Happy"><p>Happy</p></label>

                                            <input type="radio" name="experience" class="experience" value="Okay" id="Okay" />
                                            <label for="Okay"><p>Okay</p></label>

                                            <input type="radio" name="experience" class="experience" value="Displeased" id="Displeased" />
                                            <label for="Displeased"><p>Displeased</p></label>
                                        </div>

                                        <div class="form-group col-12 mt-n3">
                                        <label for=""></label>
                                        <textarea class="form-control bg-white round comment" name="" id="" rows="4" col="4"
                                        placeholder="make a comment about your experience"></textarea>
                                        </div>

                                        <div class="row justify-content-end mb-3 ">
                                            <button type="submit" class="btn btn-sm py-1" id="submitreview" style="background-color:#00dfff; border-radius:6px;">
                                                <p class="mb-n1" style="font-size: 13px;">Submit</p>
                                            </button>
                                        </div>
                                    </form>


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




</div>

<script>



       function special(id){

           $.get('/specialistprofile/'+id,function(special){


                $.each(special, function (key, specia) {
                    $('#firstname').text(specia.firstname);
                    $('#lastname').html(specia.lastname);
                    $('.phone').html('<i class="fas fa-phone-volume mr-2" style="font-size:14px; "></i>'+'  '+'<a tel="'+specia.phonenumber+'">'+specia.phonenumber+'</a>');
                    $('.email').html('<i class="fas fa-envelope mr-2" style="font-size:14px; "></i>'+'  '+specia.email);

                    //this id goes to the rate me
                    $('#speciaistid').val(specia.user_specialistid);


                    if(specia.officeaddress == null){
                        $('.address').html('');
                    }else{
                        $('.address').html('<i class="fas fa-hospital-alt mr-2" style="font-size:14px; "></i>'+'  '+specia.officeaddress);
                    }


                    $('.specialty').append(
                        '<span class="cleardata" id="" style="color: #0b0334; line-height:0.7; ">'+specia.specialization+', </span>'
                    );


                    if(specia.image == null){

                       let source = "{!! asset('images/image.png') !!}";

                        $('.specialitimg').attr("src", source);

                    }else{
                       // $('.img').html('<img src="{{!! asset('storage/images/specia.image') !!}}" class=" rounded-circle " style="width: 80px; height:80px;" />');

                        let source ="{!! asset('storage/images/"+specia.image+"') !!}";

                        $('.specialitimg').attr("src", source);

                    }


                });

            });

             $('#Modal').modal('toggle');
             $('.cleardata').remove();
             $('.specialitimg2').remove();

       }










       $('.contact').hide();

    $('.contact-but').click(function (e) {
        e.preventDefault();
        $('.contact').toggle('slow');

    });

    $('.cancel').click(function (e) {
        e.preventDefault();
        $('.contact').hide();
    });



//Review and Rating
$(document).ready(function () {


    $('.experience').click(function () {

       if($('#Very').is(':checked')){
          var cooment =  $('#Very').val();


          $('.comment').val(cooment);

       }else if($('#Happy').is(':checked')){
             var cooment =  $('#Happy').val();


            $('.comment').val(cooment);

       }else if($('#Okay').is(':checked')){
             var cooment =  $('#Okay').val();


            $('.comment').val(cooment);

       }else if($('#Displeased').is(':checked')){
             var cooment =  $('#Displeased').val();


            $('.comment').val(cooment);

       }else{

            var cooment =  $('#Excellent').val();


            $('.comment').val(cooment);
       }



    });
});


//Submiting review

$(document).ready(function () {

                $.ajaxSetup({
                 headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

    $('#submitreview').click(function (e) {
          e.preventDefault();



            var data = {
                'rating': $("input[name='product_rating']:checked").val(),
                'review': $('.comment').val(),
                'userid':$('#patientsid').val(),
                'user_speciaistid':$('#speciaistid').val()
            }

            console.log(data);

            $.ajax({
            type: "post",
            url: "/user/review",
            data: data,
            dataType: "json",
            success: function (response) {
                console.log(response.error_message);
                if(response.status == 400){

                    $.each(response.error_message, function (key, error) {
                        $('.rating_error').append('<li class="text-danger">' + error +'</li>');
                    });

                }else{
                    $('#modelIdrating').modal('hide');
                    swal("Rating completed ","","success",{
                                button:"ok",
                    });
                }
            }
          });

    });


});




</script>
