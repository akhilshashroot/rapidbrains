if ($("#newsletter").length > 0) {
  $("#newsletter").validate({
  submitHandler: function(form) {
    var inputText=$("#emailnews").val();
    console.log(inputText);
       var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(!inputText.match(mailformat))
   
   {
     $("#error-display").css('display','block');
   
   return false;
   }
   
  $.ajaxSetup({
  headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
  $('#submit').html('Please Wait...');
  $("#submit"). attr("disabled", true);
  $.ajax({
  url: "https://talents.rapidbrains.com/api/newsletter-rapidbrains",
  type: "POST",
  data: $('#newsletter').serialize(),
  success: function( response ) {
   if(response.code==403){
             swal({
  title: response.message,
 
  type: 'warning',
  showConfirmButton:true,
  confirmButtonText: 'Okay'
  });   
           }else if(response.code==402){
             swal({
 title: response.message,
  type: 'success',
  showConfirmButton:true,
  confirmButtonText: 'Okay'
  });   
   
  }
  document.getElementById("newsletter").reset(); 
  $("#error-display").css('display','none');
  }
  });
  }
  })
  }