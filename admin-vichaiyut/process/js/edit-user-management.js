$('document').ready(function()
{ 
     /* validation */
  $("#user-management-form").validate({
      rules:
   {
   password: {
   required: true,
   },
   username: {
            required: true,
            },
    },
       messages:
    {
            password:{
                      required: "please enter your password"
                     },
            username: "please enter your username",
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* login submit */
    function submitForm()
    {  
   var data = $("#user-management-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'process/edit-user-managementprocess.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      setTimeout(' window.location.href = "user-management.php"; ',1000);
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