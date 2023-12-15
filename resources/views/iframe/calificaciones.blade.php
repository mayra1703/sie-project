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
    <div class="relative overflow-x-auto mx-2 mt-2">
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
                @foreach ($calificaciones as $calificacion)
                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="p-2 mr-2 text-left font-medium text-gray-900 whitespace-nowrap">
                            {{ $calificacion->id_estudiante }}
                        </th>
                        <td class="p-3">
                            {{-- Agrega aquí el campo 'Re' si lo necesitas --}}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->materia->nombre }} {{-- Asumiendo que tienes una relación con AltaCurso y el campo 'nombre' --}}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->calificacion }}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->u1 }}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->u2 }}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->u3 }}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->u4 }}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->u5 }}
                        </td>
                        <td class="p-3">
                            {{ $calificacion->u6 }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>