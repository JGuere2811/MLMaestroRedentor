<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Ingreso al sistema</title>
</head>
<body>
    <header class="main-header">
        
        <div class="main-cont">
            <div class="desc-header">
                <img src="imagenes/logo.jpg" alt="image school">
                <p>Maestro Redentor</p>
            </div>
        </div>   
        <div class="cont-header">
            <h1>Bienvenido</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Administrador</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profesor</a>
                    </li>
                    
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="" onsubmit="return validar()">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            <label for="password">Contraseña</label>
                            <input type="password" name="pass" id="pass" placeholder="Contraseña">
                            <div id="messageUsuario"></div>
                            <button id="loginUsuario" type="button">INICIAR SESION</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="" onsubmit="return validar()">   
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            <label for="password">Contraseña</label>
                            <input type="password" name="pass" id="pass" placeholder="Contraseña">
                            <div id="messageProfesor"></div>
                            <button id="loginProfesor" type="button">INICIAR SESION</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
        
    </header>

    <script src="js/jquery-3.7.0.min.js"></script> 
    <script src="js/login.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>