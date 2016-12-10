$('document').ready(function()
{ 
     /* validation */
  $("#homecare-form").validate({
      rules:
   {
   homecare: {
            required: true,
            },
    },
       messages:
      {
            
            homecare: "please enter any text",
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
   var data = $("#homecare-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'process/edit-vichaiyuthomecareprocess.php',
   data : data,
   cache: false,
   beforeSend: function()
   { 
    $("#error").empty();
    $("#error").fadeOut();
   },
   success :  function(response)
      {      
     if(response=="ok"){
      $("#error").fadeIn(1000, function(){   
         $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+"Updated"+' !</div>');
      // setTimeout(' window.location.href = "vichaiyut-home-care.php"; ',1000);
      });
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
