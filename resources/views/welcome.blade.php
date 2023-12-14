<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIE Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
</head>
<body>
    <nav class="bg-white border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-2">
            <img src="logoSie.jpeg" class="h-16"/>

            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="tel:5541251234" class="text-base text-gray-500 hover:underline" title='Pagina ITE oficial'>(646) 123-45-67</a>
                <a href='https://www.ensenada.tecnm.mx' alt='Pagina ITE oficial'>
                    <img src="iteLogo.png" class="h-16"/>
                </a>
            </div>

        </div>
    </nav>

    <nav class="bg-gradient-to-r from-dark-blue to-light-blue">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium text-base mt-0 space-x-8 rtl:space-x-reverse">
                    <li>
                        <a href="#" class="text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:underline">Proposito</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:underline">Servicios</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:underline">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="slider-frame">
        <ul>
            <li><img src="../imagenes/cesa.jpeg" alt=""></li>
            <li><img src="../imagenes/grupo.jpeg" alt=""></li>
            <li><img src="../imagenes/hackathon.jpeg" alt=""></li>
            <li><img src="../imagenes/hackathonMex.jpg" alt=""></li>
        </ul>
    </div>


    
    <div class='flex flex-col m-2'>
        <p class='text-center justify-center text-light-blue font-bold text-xl m-2'>Selecciona tu tipo de acceso</p>
        <div class='flex items-center justify-center'>
            <a href="{{ ('login') }}" class="flex flex-col items-center justify-center m-4 bg-dark-blue border border-dark-blue rounded-lg shadow w-52 hover:bg-gold hover:border-gold">
                <div class="flex flex-col justify-between p-3 leading-normal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class='fill-white h-10'>
                        <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                    </svg>
                    <h5 class="m-2 text-l font-bold tracking-tight text-white">SIE Estudiante</h5>
                </div>
            </a>

            <a href="{{ ('login') }}" class="flex flex-col items-center justify-center m-4 bg-dark-blue border border-dark-blue rounded-lg shadow w-52 hover:bg-gold hover:border-gold">
                <div class="flex flex-col justify-between p-3 leading-normal">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class='fill-white h-10'>
                    <path d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z"/>
                </svg>
                    <h5 class="m-2 text-l font-bold tracking-tight text-white">SIE Docente</h5>
                </div>
            </a>

            <a href="{{ ('login') }}" class="flex flex-col items-center justify-center m-4 bg-dark-blue border border-dark-blue rounded-lg shadow w-52 hover:bg-gold hover:border-gold">
                <div class="flex flex-col justify-between p-3 leading-normal">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class='fill-white h-10'>
                        <path d="M96 32C60.7 32 32 60.7 32 96V384H96V96l384 0V384h64V96c0-35.3-28.7-64-64-64H96zM224 384v32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H416V384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32z"/>
                    </svg>
                    <h5 class="m-2 text-l font-bold tracking-tight text-white">SIE Administrativo</h5>
                </div>
            </a>
        </div>

        <div class='flex items-center justify-center bg-gradient-to-r from-dark-blue to-light-blue shadow mx-12 h-72 m-3 mb-6'>
            <img class="w-1/2 h-72 rounded-none" src="{{ asset('imagenes/grupo.jpeg') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="m-2 text-3xl font-bold tracking-tight text-white">¿Cuál es el proposito de SIE?</h5>
                <p class="m-2 font-normal text-white text-justify">El Sistema de Información Educativa (SIE) aspira a convertirse en un sistema de levantamiento estadístico de datos escolares que permite la descripción de la situación actual y los posibles avances en materia educativa.
                    Permite la consulta de historial academico, consulta de horarios, asignación de materias, entre otras funciones.
                </p>
            </div>
        </div>
        
        <div class='flex flex-col items-center justify-center bg-light-gray mx-12 h-auto p-3 m-3 mb-6'>
            <h1 class='text-center justify-center text-black font-bold text-2xl'>¿Qué hacer en SIE?</h1>
            <p class='text-center justify-center text-gray-600 text-base'>Conoce los servicios que ofrece el Sistema de Información Educativa</p>

            <div class='grid grid-cols-3 grid-rows-2 items-center justify-center mt-2'>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-light-gold m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class='w-full h-12 mt-3'>
                        <path class='fill-white' d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z"/>
                    </svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center text-dark-blue">Consulta de Datos Academicos</div>
                        <p class="text-dark-blue text-base text-justify">
                        Consulta y/o actualiza de manera rapida y segura tu informacion academica o personal. Puedes solicitar apoyo de administrativos
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class='w-full h-12 mt-3'>
                        <path class='fill-light-gold' d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/>
                    </svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center text-dark">Consulta de Calificaciones</div>
                        <p class="text-gray-800 text-base text-justify">
                        Consulta tus calificaciones, retricula y promedio, e imprime de manera sencilla tu kardex completo.
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-light-gold m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class='w-full h-12 mt-3'>
                        <path class='fill-white' d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z"/>
                    </svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center text-dark-blue">Consulta de Horarios</div>
                        <p class="text-dark-blue text-base text-justify">
                        Consulta tu horario actual junto al aula y profesor asignado para no perder ninguna clase.
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class='w-full h-12 mt-3'>
                        <path class='fill-light-gold' d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zM272 192H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16s7.2-16 16-16zM256 304c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16zM164 152v13.9c7.5 1.2 14.6 2.9 21.1 4.7c10.7 2.8 17 13.8 14.2 24.5s-13.8 17-24.5 14.2c-11-2.9-21.6-5-31.2-5.2c-7.9-.1-16 1.8-21.5 5c-4.8 2.8-6.2 5.6-6.2 9.3c0 1.8 .1 3.5 5.3 6.7c6.3 3.8 15.5 6.7 28.3 10.5l.7 .2c11.2 3.4 25.6 7.7 37.1 15c12.9 8.1 24.3 21.3 24.6 41.6c.3 20.9-10.5 36.1-24.8 45c-7.2 4.5-15.2 7.3-23.2 9V360c0 11-9 20-20 20s-20-9-20-20V345.4c-10.3-2.2-20-5.5-28.2-8.4l0 0 0 0c-2.1-.7-4.1-1.4-6.1-2.1c-10.5-3.5-16.1-14.8-12.6-25.3s14.8-16.1 25.3-12.6c2.5 .8 4.9 1.7 7.2 2.4c13.6 4.6 24 8.1 35.1 8.5c8.6 .3 16.5-1.6 21.4-4.7c4.1-2.5 6-5.5 5.9-10.5c0-2.9-.8-5-5.9-8.2c-6.3-4-15.4-6.9-28-10.7l-1.7-.5c-10.9-3.3-24.6-7.4-35.6-14c-12.7-7.7-24.6-20.5-24.7-40.7c-.1-21.1 11.8-35.7 25.8-43.9c6.9-4.1 14.5-6.8 22.2-8.5V152c0-11 9-20 20-20s20 9 20 20z"/>
                    </svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center text-dark">Pagos de Servicios</div>
                        <p class="text-gray-800 text-base text-justify">
                        Selecciona los servicios que desees pagar durante el semestre y genera los recibos de pago correspondientes.
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-light-gold m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class='w-full h-12 mt-3'>
                        <path class='fill-white' d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/>
                    </svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center text-dark-blue">Evaluacion Docente</div>
                        <p class="text-dark-blue text-base text-justify">
                        Realiza cada semestre una evaluacion docente para mejorar la calidad de la educacion impartida en la institucion.
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class='w-full h-12 mt-3'>
                        <path class='fill-light-gold' d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zM272 192H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16s7.2-16 16-16zM256 304c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16zM164 152v13.9c7.5 1.2 14.6 2.9 21.1 4.7c10.7 2.8 17 13.8 14.2 24.5s-13.8 17-24.5 14.2c-11-2.9-21.6-5-31.2-5.2c-7.9-.1-16 1.8-21.5 5c-4.8 2.8-6.2 5.6-6.2 9.3c0 1.8 .1 3.5 5.3 6.7c6.3 3.8 15.5 6.7 28.3 10.5l.7 .2c11.2 3.4 25.6 7.7 37.1 15c12.9 8.1 24.3 21.3 24.6 41.6c.3 20.9-10.5 36.1-24.8 45c-7.2 4.5-15.2 7.3-23.2 9V360c0 11-9 20-20 20s-20-9-20-20V345.4c-10.3-2.2-20-5.5-28.2-8.4l0 0 0 0c-2.1-.7-4.1-1.4-6.1-2.1c-10.5-3.5-16.1-14.8-12.6-25.3s14.8-16.1 25.3-12.6c2.5 .8 4.9 1.7 7.2 2.4c13.6 4.6 24 8.1 35.1 8.5c8.6 .3 16.5-1.6 21.4-4.7c4.1-2.5 6-5.5 5.9-10.5c0-2.9-.8-5-5.9-8.2c-6.3-4-15.4-6.9-28-10.7l-1.7-.5c-10.9-3.3-24.6-7.4-35.6-14c-12.7-7.7-24.6-20.5-24.7-40.7c-.1-21.1 11.8-35.7 25.8-43.9c6.9-4.1 14.5-6.8 22.2-8.5V152c0-11 9-20 20-20s20 9 20 20z"/>
                    </svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center text-dark">Accesibilidad Academica</div>
                        <p class="text-gray-800 text-base text-justify">
                        Ingresa a la plataforma que esta adaptada para alumnos, docentes y administrativos, con sus correspondientes actividades.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class='flex justify-between text-center bg-gradient-to-r from-dark-blue to-light-blue h-32'>
        <img src="{{ asset('imagenes/sieLogoBlanco.png') }}" class="absolute h-20 m-4" alt="...">
        
        <p class='text-white text-sm text-right mt-8 ml-80'>Siguenos en nuestras redes oficiales TecNM ITE</p>
    </div>
</body>
</html>