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

    <div class="space-y-6 h-screen">
        <span class="sm:m-6 block">Inicio > Gestor de Usuarios...</span>
        <div class="relative bg-[#95D8EB] w-full bg-opacity-60 flex">
            <h1 class="sm:m-6 text-3xl font-extrabold text-skin-base sm:text-4xl p-6">
                <span class="block">Gestor de Usuarios</span>
            </h1>
        </div>

        <form class="relative mx-auto overflow-hidden inline-flex items-center w-full justify-center">

            <input type="search" id="default-search"
                class="block w-1/4 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buscar..." required />
            <div class="relative px-4 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
        </form>

        <div class="relative bg-[#bfe8f3] text-xl max-w-screen-xl mx-auto overflow-hidden shadow-lg">
            <div class="relative w-full mx-auto py-10 px-auto sm:py-6 sm:px-6 lg:px-8">
                <p>ID XXX-XXX Nombre del usuario
                </p>

            </div>
        </div>
        <br>
        <div class="relative bg-[#bfe8f3] text-xl max-w-screen-xl mx-auto overflow-hidden shadow-lg">
            <div class="relative w-full mx-auto py-10 px-auto sm:py-6 sm:px-6 lg:px-8">
                <p>ID XXX-XXX Nombre del usuario
                </p>

            </div>
        </div>
        <br>
        <div class="relative bg-[#bfe8f3] text-xl max-w-screen-xl mx-auto overflow-hidden shadow-lg">
            <div class="relative w-full mx-auto py-10 px-auto sm:py-6 sm:px-6 lg:px-8">
                <p>ID XXX-XXX Nombre del usuario
                </p>
            </div>
        </div>

    </div>


</body>
<x-footer>
</x-footer>

</html>
