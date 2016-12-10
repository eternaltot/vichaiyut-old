$('document').ready(function()
{ 
    function submitForm()
    {  
   var data = $("#contact-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'add-contact.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      // setTimeout(' window.location.href = "index.php#contact"; ',1000);
      swal("Good job!", "You clicked the button!", "success");
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
           
         });
     }
     }
   });
    return false;
  }
});