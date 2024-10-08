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
        <span class="block">Inicio > Inicio de Sesión</span>
        <div class="relative bg-skin-fill max-w-4xl mx-auto overflow-hidden shadow-lg">
            <div class="relative max-w-2xl mx-auto py-10 px-auto sm:py-20 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-extrabold text-skin-base sm:text-4xl">
                    <span class="block">Inicio de Sesión</span>
                </h1>
                <br>
                <h3 class="text-xl font-bold text-skin-base">
                    <span class="block">Correo Electrónico *</span>
                </h3>
                <input
                    class="appearance-none block w-full bg-purple-100 text-gray-700 border border-black py-3 px-4 mb-3 focus:bg-white focus:border-black"
                    id="grid-first-name" type="text" placeholder="example@mail.com">
                <br>
                <h3 class="text-xl font-bold text-skin-base">
                    <span class="block">Contraseña *</span>
                </h3>
                <input
                    class="appearance-none block w-full bg-purple-100 text-gray-700 border border-black py-3 px-4 mb-3 focus:bg-white focus:border-black"
                    id="grid-first-name" type="text" placeholder="contraseña">
                <div
                    class="relative bg-skin-fill mx-auto overflow-hidden shadow-lg  mt-10 max-w-sm sm:flex sm:justify-center">
                    <a href="#"
                        class="w-full text-skin-base bg-[#95D8EB] flex items-center justify-center px-4 py-3 text-lg font-medium shadow-sm bg-opacity-60">
                        Iniciar Sesión </a>
                </div>
                <div class="relative bg-skin-fill mx-auto overflow-hidden w-full sm:flex sm:justify-center">
                    <a href="#"
                        class="w-full text-[#5EB2E5] font-bold flex items-center justify-center px-4 py-3 text-lg">
                        No tienes una cuenta? Haz clic aquí </a>
                </div>
            </div>
        </div>
    </div>


</body>
<x-footer>
</x-footer>

</html>
