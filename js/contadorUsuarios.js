$(function(){
    $(document).on('click','#contadorUser', function(){
      
        $.post("../contador/contUsuarios.php", {
            action:'UsersXarea',
                }, function(data){
                    $("#cardAreaUse").html(data.cardAreaxUser);		
                }, 'json');
    });
});