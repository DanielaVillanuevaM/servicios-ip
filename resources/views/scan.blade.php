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
        <x-cookies></x-cookies>


        <span class="block">Inicio</span>
        <div class="relative bg-skin-fill max-w-4xl mx-auto overflow-hidden shadow-lg">
            <div class="relative max-w-2xl mx-auto py-10 px-auto sm:py-20 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-extrabold text-skin-base sm:text-4xl">
                    <span class="block">Registro para Escaneo</span>
                </h1>
                <br>
                <h3 class="text-xl font-bold text-skin-base">
                    <span class="block">Dirección IP*</span>
                </h3>
                <input
                    class="appearance-none block w-full bg-purple-100 text-gray-700 border border-black py-3 px-4 mb-3 focus:bg-white focus:border-black"
                    id="grid-first-name" type="text" placeholder="XXX.XXX.XXX.XXX">
                <br>
                <h3 class="text-xl font-bold text-skin-base">
                    <span class="block">Tipo de Escaneo*</span>
                </h3>
                <button
                    class="w-full flex items-left justify-left py-2 px-4 text-sm font-medium text-gray-900 bg-white border border-black hover:bg-purple-100 hover:text-primary-700"
                    type="button">
                    <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                    Seleccionar...
                </button>
                <br>
                <h3 class="text-xl font-bold text-skin-base">
                    <span class="block">Scripts</span>
                </h3>
                <button
                    class="w-full flex items-left justify-left py-2 px-4 text-sm font-medium text-gray-900 bg-white border border-black hover:bg-purple-100 hover:text-primary-700"
                    type="button">
                    <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                    Seleccionar...
                </button>
                <div
                    class="relative bg-skin-fill mx-auto overflow-hidden shadow-lg  mt-10 max-w-sm sm:flex sm:justify-center">
                    <a href="#"
                        class="w-full text-skin-base bg-[#95D8EB] flex items-center justify-center px-4 py-3 text-lg font-medium shadow-sm bg-opacity-60">
                        Escanear </a>
                </div>
            </div>
        </div>
    </div>


</body>
<x-footer>
</x-footer>

</html>
