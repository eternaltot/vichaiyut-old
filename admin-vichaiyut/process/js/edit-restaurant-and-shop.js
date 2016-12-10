$('document').ready(function()
{ 
     /* validation */
  $("#restaurant-form").validate({
      rules:
   {
   restaurant: {
            required: true,
            },
        shop: {
          shop: true,
        }
    },
       messages:
      {
            
            restaurant: "please enter any text",
            shop: "please enter any text",
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
   var data = $("#restaurant-form").serialize();
  
   $.ajax({
    
   type : 'POST',
   url  : 'process/edit-restaurantandshopprocess.php',
   data : data,
   cache: false,
   beforeSend: function()
   { 
    $("#error").empty();
    $("#error").fadeOut();
    console.log(data);
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
