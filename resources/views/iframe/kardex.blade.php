<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/csslogin.css') }}">
    <title>Kardex</title>
</head>
<body>
<div class="flex justify-between py-4 px-5 bg-white rounded-md mt-2 mb-2">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-dark-blue sm:truncate sm:text-3xl sm:tracking-tight pb-2">Kardex</h2>
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gold" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z" clip-rule="evenodd" />
                <path d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                </svg>
                Presencial
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gold" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                </svg>
                Remote
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gold" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                </svg>
                Plan de Estudios 	(3) ISIC-2010-224 DE 260 CREDITOS
            </div>
            </div>
        </div>

            <!-- Dropdown -->
            <div class="relative ml-3 sm:hidden">
            <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                More
                <svg class="-mr-1 ml-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>
            
            <div class="absolute right-0 z-10 -mr-1 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-0">Edit</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-1">View</a>
            </div>
            </div>
        </div>
    </div>
    <div class="p-5 h-screen bg-slate-100">
        <table class="w-full">
            <thead class="bg-slate-50 border-b-2 border-gold">
                <tr class="bg-light-gold">
                <th class="p-3 text-sm font-semibold trackin-wide text-left">Código</th>
                <th class="p-3 text-sm font-semibold trackin-wide text-left">Créditos</th>
                <th class="p-3 text-sm font-semibold trackin-wide text-left">Materia</th>
                <th class="p-3 text-sm font-semibold trackin-wide text-left">Calificación</th>
                <th class="p-3 text-sm font-semibold trackin-wide text-left">Grupo</th>
                <th class="p-3 text-sm font-semibold trackin-wide text-left">Clave</th>
                </tr>
            </thead>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">ACF0901</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">CÁLCULO DIFERENCIAL</td>
                <td class="p-3 text-sm text-light-gray">98</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2213 1</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">ACF0902</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">CÁLCULO INTEGRAL</td>
                <td class="p-3 text-sm text-light-gray">92</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2221 2</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">ACF0904</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">CÁLCULO VECTORIAL</td>
                <td class="p-3 text-sm text-light-gray">77</td>
                <td class="p-3 text-sm text-light-gray">2</td>
                <td class="p-3 text-sm text-light-gray">2223 3</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">ACF0905</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">ECUACIONES DIFERENCIALES</td>
                <td class="p-3 text-sm text-light-gray">87</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2232 5</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCD1015</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">LENGUAJES Y AUTÓMATAS</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray">2233</td>
                </tr>
                <!-- ... (otras filas) ... -->
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">IMOD-003</td>
                <td class="p-3 text-sm text-light-gray">0</td>
                <td class="p-3 text-sm text-light-gray">INGLES MODULO 3</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCD1016</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">LENGUAJES Y AUTÓMATA</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">SCC1019</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">PROGRAMACIÓN LÓGICA</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCC1012</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">INTELIGENCIA ARTIFICIAL</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">AED1285</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">FUNDAMENTOS PROGRAMACIÓN</td>
                <td class="p-3 text-sm text-light-gray">97</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2213 1</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">AED1286</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">PROGRAMACIÓN ORIENTADA A OBJETOS</td>
                <td class="p-3 text-sm text-light-gray">95</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2221 2</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">AED1026</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">ESTRUCTURA DE DATOS</td>
                <td class="p-3 text-sm text-light-gray">76</td>
                <td class="p-3 text-sm text-light-gray">2</td>
                <td class="p-3 text-sm text-light-gray">2223 3</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCD1027</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">TÓPICOS AVANZADOS DE PROGRAMACIÓN</td>
                <td class="p-3 text-sm text-light-gray">100</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2231 4</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">AEC1034</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">FUNDAMENTOS TELECOMUNICACIONES</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray">2233</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCD1021</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">REDES DE COMPUTADORAS</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">SCD1004</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">CONMUTACIÓN Y ENRUTAMIENTO DE REDES</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCA1002</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">ADMINISTRACIÓN DE REDES</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">DDD-1803</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">DESARROLLO WEB EN .NET</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">ACA0907</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">TALLER DE ÉTICA</td>
                <td class="p-3 text-sm text-light-gray">94</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2213 1</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">AEC1008</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">CONTABILIDAD FINANCIERA</td>
                <td class="p-3 text-sm text-light-gray">100</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2221 2</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCC1005</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">CULTURA EMPRESARIAL</td>
                <td class="p-3 text-sm text-light-gray">100</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2223 3</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">SCC1017</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">MÉTODOS NUMÉRICOS</td>
                <td class="p-3 text-sm text-light-gray">91</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2231 4</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCC1007</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">FUNDAMENTOS DE INGENIERÍA DE SOFTWARE</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray">2233</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">SCD1011</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">INGENIERÍA DE SOFTWARE</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCG1009</td>
                <td class="p-3 text-sm text-light-gray">6</td>
                <td class="p-3 text-sm text-light-gray">GESTIÓN DE PROYECTOS</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">DDD-1801</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">DESARROLLO WEB EN JAVA</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">DDB-1804</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">PROGRAMACIÓN DE DISPOSITIVOS MÓVILES EN iOS</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">AED1041</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">MATEMÁTICAS DISCRETAS</td>
                <td class="p-3 text-sm text-light-gray">90</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2213 1</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">AEC1058</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">QUÍMICA</td>
                <td class="p-3 text-sm text-light-gray">88</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2221 2</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">SCD1018</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">P. ELÉCTRICOS APLICADOS EN INFORMÁTICA</td>
                <td class="p-3 text-sm text-light-gray">100</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2223 3</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCD1003</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">ARQUITECTURA DE COMPUTADORAS</td>
                <td class="p-3 text-sm text-light-gray">98</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2231 4</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">AEB1055</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">PROGRAMACIÓN WEB</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray">2233</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCC1014</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">LENGUAJES DE INTERFAZ</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">SCC1023</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">SISTEMAS PROGRAMABLES</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">DDB-1802</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">PROGRAMACIÓN DE DISPOSITIVOS MÓVILES EN ANDROID</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">DDD-1805</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">VERIFICACIÓN Y VALIDACIÓN DEL SOFTWARE</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCH1024</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">TALLER DE ADMINISTRACIÓN DE PROYECTOS</td>
                <td class="p-3 text-sm text-light-gray">94</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2213 1</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">ACF0903</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">ÁLGEBRA LINEAL</td>
                <td class="p-3 text-sm text-light-gray">97</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2221 2</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCC1013</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">INVESTIGACIÓN DE OPERACIONES</td>
                <td class="p-3 text-sm text-light-gray">96</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2223 3</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">SCD1022</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">SIMULACIÓN</td>
                <td class="p-3 text-sm text-light-gray">76</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2231 4</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">SCC1010</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">GRAFICACIÓN</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray">2233</td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">ACA0909</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">TALLER DE INVESTIGACIÓN APLICADA</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">ACA0910</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">TALLER DE INVESTIGACIÓN APLICADA</td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                <td class="p-3 text-sm text-light-gray"></td>
                </tr>
                <tr class="bg-light-blue">
                <td class="p-3 text-sm text-light-gray">ACC0906</td>
                <td class="p-3 text-sm text-light-gray">4</td>
                <td class="p-3 text-sm text-light-gray">FUNDAMENTOS DE INVESTIGACIÓN</td>
                <td class="p-3 text-sm text-light-gray">81</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2213 1</td>
                </tr>
                <tr class="bg-light-gold">
                <td class="p-3 text-sm text-light-gray">AEF1052</td>
                <td class="p-3 text-sm text-light-gray">5</td>
                <td class="p-3 text-sm text-light-gray">PROBABILIDAD Y ESTADÍSTICA</td>
                <td class="p-3 text-sm text-light-gray">100</td>
                <td class="p-3 text-sm text-light-gray">1</td>
                <td class="p-3 text-sm text-light-gray">2221 2</td>
                </tr>
        </table>
    </div>
</body>
</html>