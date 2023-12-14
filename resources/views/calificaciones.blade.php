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
    <div class="flex rounded-md text-left">
        <table class="m-2 text-sm text-left text-dark-blue">
            <thead class="text-xs text-left text-white uppercase bg-gray-50">
                <tr class="bg-light-gold text-left">
                    <th scope="col" class="px-6 py-3">
                        Clave
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Re
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Materia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Calificacion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        U1
                    </th>
                    <th scope="col" class="px-6 py-3">
                        U2
                    </th>
                    <th scope="col" class="px-6 py-3">
                        U3
                    </th>
                    <th scope="col" class="px-6 py-3">
                        U4
                    </th>
                    <th scope="col" class="px-6 py-3">
                        U5
                    </th>
                    <th scope="col" class="px-6 py-3">
                        U6
                    </th>
                </tr>
            </thead>
            <tbody class="text-left">
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="pt-3 text-left font-medium text-gray-900 whitespace-nowrap">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="p-3">
                        Silver
                    </td>
                    <td class="p-3">
                        Laptop
                    </td>
                    <td class="p-3">
                        $2999
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="pt-3 font-medium text-gray-900 whitespace-nowrap">
                        Microsoft Surface Pro
                    </th>
                    <td class="p-3">
                        White
                    </td>
                    <td class="p-3">
                        Laptop PC
                    </td>
                    <td class="p-3">
                        $1999
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="pt-3 font-medium text-gray-900 whitespace-nowrap">
                        Magic Mouse 2
                    </th>
                    <td class="p-3">
                        Black
                    </td>
                    <td class="p-3">
                        Accessories
                    </td>
                    <td class="p-3">
                        $99
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>