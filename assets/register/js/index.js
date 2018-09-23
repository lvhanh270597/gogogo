$('.form-head').click(function(){
  
    if($(this).closest('.grop-from').attr('id')=='signup'){
        $('.grop-from').attr('id' , 'firstname');
        $('.icon-action').addClass('back');
    }  
    else if($(this).closest('.grop-from').attr('id')=='success'){
          $('.grop-from').attr('id' , 'signup');
          $('input').val('');
    }
    
});



$('.form-action').click(function(){
 
    var form_id = $('.grop-from').attr('id');
      $('.icon-action').addClass('back'); 
    if($('#control-' + form_id).val() != ''){
      switch (form_id) {
          case 'firstname':
              form_id = "lastname";
              break;
          case "lastname":
              form_id = "username";
              break;
          case "username":
              form_id = "password";
              break;
          case "password":
              form_id = "password-repeat";
              break;
          case "password-repeat":
              form_id = "success";
              break;   
        case "success":
              form_id = "signup";
              break; 
      }
       $('.icon-action').addClass('back');
      
  }
  
  else{
    
     switch (form_id) {
          case 'firstname':
              form_id = "signup";
              $('.icon-action').removeClass('back');
              break;
          case "lastname":
              form_id = "firstname";
              break;
          case "username":
              form_id = "lastname";
              break;
          case "password":
              form_id = "username";
              break;
          case "password-repeat":
              form_id = "password";
              break; 
         case "success":
              form_id = "signup";
              break; 
      }
     $('.icon-action').removeClass('back');
  }
  $('.grop-from').attr('id' , form_id);
  
});

$('input').keyup(function(){
   $('.grop-from').removeClass('error');
    $('.error-text').fadeOut();
    
    if($(this).val()!=''){
      $('.icon-action').removeClass('back');
    }
  else{
    $('.icon-action').addClass('back');
  }
  
  
})