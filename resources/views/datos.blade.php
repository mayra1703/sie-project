<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/cssdashboard.css') }}">
    <title>Datos Personales</title>
</head>

<body class="h-screen">
    <div class="flex h-screen">
        <nav class='h-full w-60 bg-gradient-to-b from-dark-blue via-light-blue to-turquese text-white font-bold'>
            <ul class="ml-2 mb-2 mt-2 w-60 p-2">
                <li class="flex w-full text-center justify-center">
                    <img src="../imagenes/userProfile.png" alt="" class="flex justify-center text-center w-31 h-24" />
                </li>
                <span class="flex justify-center text-center m-2">User</span>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="#datosGenerales">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Datos Generales</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('cambiar-contenido', ['id' => 'enlace1']) }}">
                        <i class="fas fa-kardex"></i>
                        <span class="nav-item">Calificaciones</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('cambiar-contenido', ['id' => 'enlace2']) }}">
                        <i class="fas fa-wallet"></i>
                        <span class="nav-item">Grupos Actuales</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('cambiar-contenido', ['id' => 'enlace3']) }}">
                        <i class="fas fa-grades"></i>
                        <span class="nav-item">Horario</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('cambiar-contenido', ['id' => 'enlace4']) }}">
                        <i class="fas fa-schedule"></i>
                        <span class="nav-item">Kardex</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('cambiar-contenido', ['id' => 'enlace5']) }}">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Pagos de Servicios</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('cambiar-contenido', ['id' => 'enlace6']) }}">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Evaluacion Docente</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('welcome') }}">
                        <i class="fas fa-logout"></i>
                        <span class="nav-item">Cerrar Sesion</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="m-3 w-full flex" id="contenedor">
            <iframe id="miIframe" src="{{ route('calificaciones') }}" class="flex-grow"></iframe>
        </div>

        <!--<script>
            document.addEventListener('DOMContentLoaded', function(){
                const links = document.querySelectorAll('.nav-item');

                function changeIframeContent(id) {
                    // Logica para determinar la URL del iframe segun el id
                    var url = id === 'enlace1' ? "{{ route('calificaciones') }}" : "{{ route('grupos') }}";

                    // Obtener el elemento iframe por su id
                    var iframe = document.getElementById('miIframe');

                    // Cambiar la URL del iframe
                    iframe.src = url;
                }

                links.forEach(link => {
                    link.addEventListener('click', function(){
                        changeIframeContent(link.id);
                    });
                });
            });
        </script> -->
    </div>
    
</body>
</html>