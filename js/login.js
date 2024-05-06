$(document).ready(function(){
    $('#loginUsuario').on('click',function(){
        loginUsuario();
    });
    $('#loginProfesor').on('click',function(){
        loginProfesor();
    });
})
function loginUsuario() {
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    $.ajax({
        url: './includes/loginUsuario.php',
        method: 'POST',
        data: {
            login:login,
            pass:pass
        },
        success: function(data){
            $('#messageUsuario').html(data);

            if(data.indexof('Redirecting') >=0){
                window.location = 'Administrador/';
            }
        }
    })
}
function loginProfesor() {
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    $.ajax({
        url: './includes/loginProfesor.php',
        method: 'POST',
        data: {
            login:login,
            pass:pass
        },
        success: function(data){
            $('#messageProfesor').html(data);

            if(data.indexof('Redirecting') >=0){
                window.location = 'Profesor/';
            }
        }
    })
}