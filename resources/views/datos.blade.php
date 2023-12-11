<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/cssdashboard.css')
    <link rel="stylesheet" href="{{ asset('css/cssdashboard.css') }}">
    <title>Datos Personales</title>
</head>
<body>
    <div class="container">
        <nav classname='relative top-0 bottom-0 h-100 w-200 bg-white overflow-hidden shadow-stone-950 '>
            <ul>
                <li><a href="#" class="logo">
                    <img src="../iconSie.jpeg" alt="">
                     <span class="nav-item">Panel de Inicio</span>
                </a></li>
                <li><a href=""><i class="fas fa-home"></i>
                    <span class="nav-item">Inicio</span></a></li>
                <li><a href="#">
                    <i class="fas fa-kardex"></i>
                    <span class="nav-item">Kardex</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-wallet"></i>
                    <span class="nav-item">Pagos</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-grades"></i>
                    <span class="nav-item">Calificaciones</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-schedule"></i>
                   <span class="nav-item">Horario</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Perfil</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-logout"></i>
                    <span class="nav-item">Cerrar Sesion</span>
                </a></li>
                <li><a href=""></a></li>
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Datos Personales</h1>
                <i class="fas fa-user-cong"></i>
            </div>
            <div class="main-datos">
                <div class="card">
                    
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>