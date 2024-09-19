<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- header font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap"
        rel="stylesheet">
    <!-- body font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
</head>


<script src="https://cdn.tailwindcss.com"></script>
<script defer src="modal.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">




<body>
    <nav class="bg-[#3D1F7C] border-gray-200">
        <!-- THIS IS THE COLOR dark:bg-[#3D1F7C] -->
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto pt-6 pb-2">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white font-kode-mono">SafeNetIP</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse rounded-lg">
                <!-- se retira flex-col y border border-gray-100 mt-4 p-4 md:p-0-->
                <ul class="flex font-medium  bg-[#3D1F7C] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#3D1F7C]">
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white rounded md:hover:bg-[#3D1F7C] hover:underline">Inicio de Sesion</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white rounded md:hover:bg-[#3D1F7C] hover:underline ">Registro</a>
                    </li>
                </ul>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#3D1F7C]">
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white rounded md:hover:bg-[#3D1F7C] hover:underline">Inicio</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white rounded md:hover:bg-[#3D1F7C] hover:underline">Guía</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white rounded md:hover:bg-[#3D1F7C] hover:underline">Acerca de ...</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white rounded md:hover:bg-[#3D1F7C] hover:underline">Gestor de Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr class="h-4 bg-[#794adb] border-0 ">

    <x-test></x-test>
    @yield('content')
</body>

</html>