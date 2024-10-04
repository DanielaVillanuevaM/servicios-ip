<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">

    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-header>
</x-header>

<body class="antialiased bg-bottom font-jetbrains bg-no-repeat bg-fixed" style="background-image: url('fondo.png')">
    <div class="sm:m-6 space-y-6 h-screen">
        <nav class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-slate-900 hover:text-blue-600">Inicio</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="ms-1 text-sm font-medium text-slate-900 hover:text-blue-600 md:ms-2">Gestor de
                            Usuarios</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-slate-900 md:ms-2">Nombre de Usuario</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- user name or line divider -->
        <div class="relative bg-[#95D8EB] w-full h-auto bg-opacity-60 flex">
            <h1 class="sm:m-6 p-5 text-3xl font-extrabold text-skin-base sm:text-4xl">
                <span class="block">Nombre de Usuario</span>
            </h1>
        </div>

        <!-- here starts the grid  -->


        <div class="grid grid-cols-5 grid-rows-5 gap-4 mx-14 mt-10">
            <div class="mr-3.5">
                <button data-modal-hide="default-modal" type="button"
                    class="w-44 min-h-16 text-black bg-[#95D8EB] hover:bg-[#5EB2E5] focus:ring-4 focus:outline-none focus:ring-[#5EB2E5] font-medium text-sm px-5 py-2.5 text-center">Dar
                    Administrador</button>
            </div>
            <div class="col-start-1 row-start-2">
                <button data-modal-hide="default-modal" type="button"
                    class=" w-44 min-h-16 text-black bg-[#95D8EB] hover:bg-[#5EB2E5] focus:ring-4 focus:outline-none focus:ring-[#5EB2E5] font-medium text-sm px-5 py-2.5 text-center">Quitar
                    Administrador</button>
            </div>
            <div class="col-start-1 row-start-3">
                <button data-modal-hide="default-modal" type="button"
                    class="w-44 min-h-16 text-black bg-[#95D8EB] hover:bg-[#5EB2E5] focus:ring-4 focus:outline-none focus:ring-[#5EB2E5] font-medium text-sm px-5 py-2.5 text-center">Eliminar
                    Cuenta</button>
            </div>
            <div
                class="col-span-4 sm:mx-10 mx-24 row-span-5 col-start-2 row-start-1 w-10/12 bg-white font-semibold bg-opacity-80 min-h-96 text-2xl">
                <h1 class="p-6 px-">Id Número</h1>
                <div class="p-6">
                    <h2>Nombre Completo</h2>
                    <h2 class="px-4">Nombre Completo del Usuario</h2>
                </div>
                <div class="p-6">
                    <h2>Correo Electronico</h2>
                    <h2 class="px-4">correo@ejemplo.com</h2>
                </div>
            </div>
        </div>

    </div>


</body>
<x-footer>
</x-footer>

</html>
