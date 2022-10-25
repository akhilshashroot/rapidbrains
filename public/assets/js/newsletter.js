if ($("#newsletter").length > 0) {
  $("#newsletter").validate({
    rules: {
      email: {
      required: true,
      maxlength: 50,
      email: true,
      },  
        
      },
      messages: {
      email: {
      required: "Please enter valid email",
      email: "Please enter valid email",
      maxlength: "The email name should less than or equal to 50 characters",
      },
      },
 
  submitHandler: function(form) {
   
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