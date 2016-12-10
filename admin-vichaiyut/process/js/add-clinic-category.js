$('document').ready(function()
{ 
     /* validation */
  $("#clinic-form").validate({
      rules:
   {
   name: {
            required: true,
            },
    },
       messages:
      {
            
            about: "please enter any text",
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
   var data = $("#clinic-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'process/add-cliniccategoryprocess.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      setTimeout(' window.location.href = "clinic-category.php"; ',1000);
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