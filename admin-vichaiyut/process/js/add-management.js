$('document').ready(function()
{ 
   
    function submitForm()
    {  
      for (instance in CKEDITOR.instances) {
              CKEDITOR.instances[instance].updateElement();
      }
    var file_data = $('#sortpicture').prop('files')[0];   
    var data = new FormData();                  
    data.append('file', file_data);
    data.append('name', $("input[name=name]").val());
    data.append('position', $("input[name=position]").val());
    data.append('education', $("textarea[name=education]").val());
    data.append('experience', $("textarea[name=experience]").val());
    data.append('award', $("textarea[name=award]").val());
    console.log(data);
   $.ajax({
    
   type : 'POST',
   url  : 'process/add-managementteam.php',
   cache: false,
   processData: false,
   contentType: false,
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
   },
   success :  function(response)
      {      
        console.log(response);
     if(response=="ok"){
         
      // setTimeout(' window.location.href = "management.php"; ',1000);
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
           
         });
     }
     },error : function(response){
        console.log(response);
     }
   });
    return false;
  }
});