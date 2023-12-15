<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/cssdashboard.css') }}">
    <title>Calificaciones</title>
</head>
<body>
<div class="relative overflow-x-auto mx-2">
        <table class="w-full text-sm text-left text-dark-blue">
            <thead class="text-xs text-left text-white uppercase p-2 px-2">
                <tr class="bg-light-gold text-left">
                    <th scope="col" class="px-2 py-3 mr-2">
                        Clave
                    </th>
                    <th scope="col" class="px-5 py-3 mr-2">
                        Re
                    </th>
                    <th scope="col" class="px-3 py-3 mr-2">
                        Materia
                    </th>
                    <th scope="col" class="px-3 py-3 mr-2">
                        Calificacion
                    </th>
                    <th scope="col" class="px-4 py-3 mr-2">
                        U1
                    </th>
                    <th scope="col" class="px-4 py-3 mr-2">
                        U2
                    </th>
                    <th scope="col" class="px-4 py-3 mr-2">
                        U3
                    </th>
                    <th scope="col" class="px-4 py-3 mr-2">
                        U4
                    </th>
                    <th scope="col" class="px-4 py-3 mr-2">
                        U5
                    </th>
                    <th scope="col" class="px-4 py-3 mr-2">
                        U6
                    </th>
                </tr>
            </thead>

            <tbody class="text-left">
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                        AEB10555SA
                    </th>
                    <td class="p-3">

                    </td>
                    
                    <td class="p-3">
                        Programación Web
                    </td>
                    <td class="p-3">
                        {{ $calificaciones1->calificacion_total }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones1->calificacionU1 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones1->calificacionU2 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones1->calificacionU3 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones1->calificacionU4 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones1->calificacionU5 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones1->calificacionU6 }}
                    </td>
                </tr>
                
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                        AEC10345SA
                    </th>
                    <td class="p-3">

                    </td>
                    <td class="p-3">
                        Fundamentos de Telecomunicaciones
                    </td>
                    <td class="p-3">
                        {{ $calificaciones2->calificacion_total }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones2->calificacionU1 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones2->calificacionU2 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones2->calificacionU3 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones2->calificacionU4 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones2->calificacionU5 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones2->calificacionU6 }}
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                        SCA10255SA
                    </th>
                    <td class="p-3">

                    </td>
                    <td class="p-3">
                        Taller de Base de Datos
                    </td>
                    <td class="p-3">
                        {{ $calificaciones3->calificacion_total }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones3->calificacionU1 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones3->calificacionU2 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones3->calificacionU3 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones3->calificacionU4 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones3->calificacionU5 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones3->calificacionU6 }}
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                        SCA10265SA
                    </th>
                    <td class="p-3">

                    </td>
                    <td class="p-3">
                        Taller de Sistemas Operativos
                    </td>
                    <td class="p-3">
                        {{ $calificaciones4->calificacion_total }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones4->calificacionU1 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones4->calificacionU2 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones4->calificacionU3 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones4->calificacionU4 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones4->calificacionU5 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones4->calificacionU6 }}
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                        SCC10075SA
                    </th>
                    <td class="p-3">

                    </td>
                    <td class="p-3">
                        Fundamentos Ing. de Software
                    </td>
                    <td class="p-3">
                        {{ $calificaciones5->calificacion_total }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones5->calificacionU1 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones5->calificacionU2 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones5->calificacionU3 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones5->calificacionU4 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones5->calificacionU5 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones5->calificacionU6 }}
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                        SCC10105SA
                    </th>
                    <td class="p-3">

                    </td>
                    <td class="p-3">
                        Graficación
                    </td>
                    <td class="p-3">
                        {{ $calificaciones6->calificacion_total }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones6->calificacionU1 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones6->calificacionU2 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones6->calificacionU3 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones6->calificacionU4 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones6->calificacionU5 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones6->calificacionU6 }}
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                        SCD10155SA
                    </th>
                    <td class="p-3">

                    </td>
                    <td class="p-3">
                        Lenguajes y Autómatas
                    </td>
                    <td class="p-3">
                        {{ $calificaciones7->calificacion_total }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones7->calificacionU1 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones7->calificacionU2 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones7->calificacionU3 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones7->calificacionU4 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones7->calificacionU5 }}
                    </td>
                    <td class="p-3">
                        {{ $calificaciones7->calificacionU6 }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>