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
        <div class="form-body">
            <img src="./user.png" alt="user-login">
            <p class="text">Bienvenido al SIE</p>
            <from class="login-from">
                <input type="text" placeholder="Numero de control">
                <input type="password" placeholder="Contrasena">
                <button>Inicio Sesion</button>
                <button>Regresar</button>
            </from>
        </div>
    
</body>
</html>