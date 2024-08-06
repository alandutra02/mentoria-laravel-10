$(function(){
    $('#esconder').click(function(){
         $('h1').hide();
         $('#esconder').hide();
         $('#mostrar').show();
    });
    $('#mostrar').click(function(){
        $('h1').show();
        $('#esconder').show();
        $('#mostrar').hide();
   });

});

