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
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Datos Generales</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="{{ route('iframe.calificaciones') }}" target="miIframe">
                        <i class="fas fa-kardex"></i>
                        <span class="nav-item">Calificaciones</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="javascript:void(0)" onclick="cambiarContenido()">
                        <i class="fas fa-wallet"></i>
                        <span class="nav-item">Grupos Actuales</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="javascript:void(0)" onclick="cargarHorario()">
                        <i class="fas fa-grades"></i>
                        <span class="nav-item">Horario</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="#">
                        <i class="fas fa-schedule"></i>
                        <span class="nav-item">Kardex</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Pagos de Servicios</span>
                    </a>
                </li>

                <li class="hover:bg-white hover:text-dark-blue p-2 mt-4 rounded-s-lg">
                    <a href="javascript:void(0)" onclick="cargarEvaluacion()">
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
            <iframe id="miIframe" src="{{ route('iframe.calificaciones') }}" class="flex-grow"></iframe>
        </div>

        <script>
            function cambiarContenido() {
                // Realizar una solicitud AJAX para obtener el nuevo contenido
                fetch("{{ route('iframe.grupos') }}")
                    .then(response => response.json())
                    .then(data => {
                        actualizarContenido(data.contenido);
                    });
            }

            function cargarHorario() {
                fetch("{{ route('iframe.horario') }}")
                    .then(response => response.json())
                    .then(data => {
                        actualizarContenido(data.contenido);
                    });
            }

            function cargarEvaluacion() {
                fetch("{{ route('iframe.evaluacion') }}")
                    .then(response => response.json())
                    .then(data => {
                        actualizarContenido(data.contenido);
                    });
            }

            function actualizarContenido(nuevoContenido) {
                document.getElementById("miIframe").contentWindow.document.open();
                document.getElementById("miIframe").contentWindow.document.write(nuevoContenido);
                document.getElementById("miIframe").contentWindow.document.close();
            }
        </script>
    </div>
    
</body>
</html>