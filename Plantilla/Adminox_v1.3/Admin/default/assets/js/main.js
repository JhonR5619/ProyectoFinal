jQuery(document).on('submit','#formLogin',function(event){
  event.preventDefault();

  jQuery.ajax({
    url:'http://PHP/Login/login.php',
    type: 'POST',
    dataType:'Json',
    data: $(this).serialize(),
    beforeSend: function(){

    }
  })
  .done(function(respuesta){
    console.log(respuesta);
  })
  .fail(function(resp){
    console.log(resp.responseText)
  })
  .always(function(){
  console.log("complete");
});
});
