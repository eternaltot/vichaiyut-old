$('document').ready(function()
{ 
     /* validation */
  $("#contact-form").validate({
      rules:
   {
   address: {
            required: true,
            },
    tel: {
            required: true,
            },
    email: {
            required: true,
            },
    },
       messages:
      {
            
            address: "please enter any text",
            tel: "please enter any text",
            email: "please enter any text",
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* login submit */
    function submitForm()
    {  
   var data = $("#contact-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'process/edit-contactprocess.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      setTimeout(' window.location.href = "contact-information.php"; ',1000);
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