<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/cssdashboard.css') }}">
    <title>Datos Personales</title>
</head>

<body>
    <div class="flex h-full">
        <nav class='h-full w-60 bg-gradient-to-b from-dark-blue to-light-blue text-white font-semibold'>
            <ul class="m-2">
                <li class="w-full text-center p-2">
                    <a href="#" class="flex text-center">
                        <img src="../iconSie.jpeg" alt="" class="w-10 h-10">
                        <span class="text-center m-2">Panel de Inicio</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#datosGenerales">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Datos Generales</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#calificaciones">
                        <i class="fas fa-kardex"></i>
                        <span class="nav-item">Calificaciones</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#grupos">
                        <i class="fas fa-wallet"></i>
                        <span class="nav-item">Grupos Actuales</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#horario">
                        <i class="fas fa-grades"></i>
                        <span class="nav-item">Horario</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#kardex">
                        <i class="fas fa-schedule"></i>
                        <span class="nav-item">Kardex</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#pagos">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Pagos de Servicios</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#evaluacion">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Evaluacion Docente</span>
                    </a>
                </li>
                <li class="hover:bg-white hover:text-dark-blue p-2">
                    <a href="#salir">
                        <i class="fas fa-logout"></i>
                        <span class="nav-item">Cerrar Sesion</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="h-full m-3" id="contenedor">
            <h1>Datos Generales</h1>
        </div>
    </div>
    
</body>
</html>