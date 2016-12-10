$('document').ready(function()
{ 
     /* validation */
  $("#vision-form").validate({
      rules:
   {
   vision: {
            required: true,
            },
    },
       messages:
      {
            
            vision: "please enter any text",
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* login submit */
    function submitForm()
    {  
      for (instance in CKEDITOR.instances) {
              CKEDITOR.instances[instance].updateElement();
      }
   var data = $("#vision-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'process/visionprocess.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      setTimeout(' window.location.href = "vision.php"; ',1000);
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