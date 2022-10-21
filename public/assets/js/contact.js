
  $(document).on('click','#enquirenowID',function(e) {
    
        $('#enquirenow').modal('show');
        $('#type').val('enquirenow');
        $('#submit').html('Enquire Now');
        $('#emaildiv').show();
        $('#skilldiv').show();
    });
 
 
 
 
 
 

  $(document).on('click','#getintouch',function(e) {
    
        $('#enquirenow').modal('show');
        $('#type').val('gettouch');
        $('#submit').html('Get in Touch');
        $('#emaildiv').show();
        $('#skilldiv').show();
    });
 
 
 

 
 

  $(document).on('click','#callbackreq',function(e) {
    
        $('#enquirenow').modal('show');
        $('#type').val('callback');
        $('#submit').html('Request a call back');
        $('#emaildiv').hide();
        $('#skilldiv').hide();
    });
 
 
 
 
 
 
