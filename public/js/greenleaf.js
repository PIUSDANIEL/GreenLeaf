$(document).ready(function(){

    $(".registersubmit").submit(function(e){
       if( $("input:checkbox").filter(":checked").lenght < 1){
           $(".err").show();
           e.preventDefault();
            return false;
       }
       else{
        $(".err").hide();
            return true;
       }

    });

     



});
