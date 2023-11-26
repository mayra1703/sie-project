<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIE Home</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-white border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-2">
            <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="logoSie.jpeg" class="h-14" alt="SIE Logo" />
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="tel:5541251234" class="text-sm text-gray-500 hover:underline">(555) 412-1234</a>
                <a href="#" class="text-sm  text-blue-600 hover:underline">Login</a>
            </div>
        </div>
    </nav>

    <nav class="bg-gradient-to-r from-dark-blue to-light-blue">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>