<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/csslogin.css')
    <link rel="stylesheet" href="{{ asset('css/csslogin.css') }}">
    <title>Inicio de sesion</title>
</head>
<body>
        <div class="container">
            <input type="checkbox" id="flip" >
            <div class="cover">
                <div class="front">
                    <img src="../imagenes/objetos.jpg" alt="">
                </div>
                <div class="back">
                    <img class="backImg" src="../imagenes/feriaLibro1.jpg" alt="">
                </div>
            </div>
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Bienvenido al SIE</div>
                            <form action="#">
                                <div class="input-boxes">
                                    <div class="input-box">
                                        <input type="text" placeholder="Numero de control" required>
                                    </div>
                                    <div class="input-box">
                                        <input type="password" placeholder="Contrasena" required>
                                    </div>
                                    <div class="text"><a href="#">Olvide Contrasena</a></div>
                                    <div class="button input-box">
                                        <input type="submit" value="Ingresar">
                                    </div>
                                    <div class="text login-text">Aun no tienes cuenta? <label for="flip">Registrate Ahora</label></div>
                                </div>
                            </form>
                        </div>
                        <div class="signup-form">
                            <div class="title">Registrate en el SIE</div>
                            <form action="#">
                                <div class="input-boxes">
                                    <div class="input-box">
                                        <input type="text" placeholder="Nombre Completo" required>
                                    </div>
                                    <div class="input-box">
                                        <i class="fas fa-nvelope"></i>
                                        <input type="text" placeholder="Numero de control" required>
                                    </div>
                                    <div class="input-box">
                                        <input type="password" placeholder="Contrasena" required>
                                    </div>
                                    <div class="button input-box">
                                        <input type="submit" value="Ingresar">
                                    </div>
                                    <div class="text sign-up-text">Ya tienes cuenta? <label for="flip">Iniciar sesion</label></div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
        </div>
    
</body>
</html>