jQuery(document).on('submit','#formLogin',function (event){

  jQuery.ajax({
    url: '../Login.html',
    type: 'POST',
    dataType: 'json',
    data: $(this).serialize() ,
    beforeSend: function(){
    $('.btnIngresar').val('Validando');

    }

  })
  .done(function(respuesta){
      console.log("success");
      if (!respuesta.error) {
        location.href = '../index.php';
      }else {
        $('.error').slideDown('slow');
      setTimeout(function(){
        $('.error').slideUp('slow');
      },3000);
      $('.btnIngresar').val('Iniciar Sesion');
      }
  })
  .fail(function(resp){
      console.log("error");
  })
  .always(function(){
    console.log("complete");
  });

});
