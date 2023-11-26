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
                <a href="tel:5541251234" class="text-base text-gray-500 hover:underline">(646) 123-45-67</a>
                <a href="#" class="text-base text-light-blue hover:underline">Login</a>
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
                        <a href="#" class="text-white hover:underline">Company</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:underline">Team</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:underline">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="duration-400 ease-in-out" data-carousel-item>
                <img src="cesa.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="duration-400 ease-in-out" data-carousel-item>
                <img src="grupo.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="duration-400 ease-in-out" data-carousel-item>
                <img src="hackathon.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="duration-400 ease-in-out" data-carousel-item>
                <img src="hackathonMex.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="duration-400 ease-in-out" data-carousel-item>
                <img src="nocheEstrellas.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full  text-white fill-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full  text-white fill-white" aria-current="true" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full  text-white fill-white" aria-current="true" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full  text-white fill-white" aria-current="true" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full  text-white fill-white" aria-current="true" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>

        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    
    <div class='flex items-center justify-center m-4'>
        <a href="#" class="flex flex-col items-center justify-center m-4 bg-dark-blue border border-dark-blue rounded-lg shadow w-52 hover:bg-dark">
            <div class="flex flex-col justify-between p-3 leading-normal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class='fill-white h-10'>
                    <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                </svg>
                <h5 class="m-2 text-l font-bold tracking-tight text-white">SIE Estudiante</h5>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center justify-center m-4 bg-dark-blue border border-dark-blue rounded-lg shadow w-52 hover:bg-dark">
            <div class="flex flex-col justify-between p-3 leading-normal">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class='fill-white h-10'>
                <path d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z"/>
            </svg>
                <h5 class="m-2 text-l font-bold tracking-tight text-white">SIE Docente</h5>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center justify-center m-4 bg-dark-blue border border-dark-blue rounded-lg shadow w-52 hover:bg-dark">
            <div class="flex flex-col justify-between p-3 leading-normal">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class='fill-white h-10'>
                    <path d="M96 32C60.7 32 32 60.7 32 96V384H96V96l384 0V384h64V96c0-35.3-28.7-64-64-64H96zM224 384v32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H416V384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32z"/>
                </svg>
                <h5 class="m-2 text-l font-bold tracking-tight text-white">SIE Administrativo</h5>
            </div>
        </a>
    </div>

    <div class='flex items-center justify-center bg-gradient-to-r from-dark-blue to-light-blue shadow mx-12 h-72 m-3'>
        <img class="w-1/2 h-72 rounded-none" src="grupo.jpeg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="m-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">¿Cuál es el proposito de SIE?</h5>
            <p class="m-2 font-normal text-white text-justify">El Sistema de Información Educativa (SIE) aspira a convertirse en un sistema de levantamiento estadístico de datos escolares que permite la descripción de la situación actual y los posibles avances en materia educativa.
                Permite la consulta de historial academico, consulta de horarios, asignación de materias, entre otras funciones.
            </p>
        </div>
    </div>
    


</body>
</html>