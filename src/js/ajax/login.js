function mylogin() {
$(document).ready(function(){
    $('#botao-login').attr('click',function(){
        var login    = $('#login').val();
        var password = $('#password').val();
        if(login != '' && password !=''){
            
            $.ajax({
                url  : "src/php/login.php",
                type : "POST",
                data :{
                    nlogin    : login,
                    npassword : password
                },
                cache: false,
                success: function(dataResult){
                    var login = JSON.parse(dataResult)
            
                    if(login.statusCode==200){
                        window.location = "src/php/redirecionar/redirecionar_chat.php";
                    }else if(login.statusCode==201){
                        $("#success").show(1000);
                        $('#success').html('login ou senha incorreta!');
                        $("#success").hide(2500); 
                    }
                }
            });
        }
    });     
});
}