$('document').ready(function()
{ 
     /* validation */
  $("#login-form").validate({
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
   var data = $("#login-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'process/loginprocess.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      $("#btn-login").html('<img src="assets/img/ajax-loader.gif" /> &nbsp; Signing In ...');
      setTimeout(' window.location.href = "index.php"; ',4000);
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
           $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
         });
     }
     }
   });
    return false;
  }
    /* login submit */
});