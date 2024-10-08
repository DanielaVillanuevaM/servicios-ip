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
    <div class="sm:m-6 space-y-6">
        <span class="block">Inicio > Registro</span>
        <form class="w-full max-w-3xl p-10 shadow-2xl m-auto bg-white">
            <h1 class="text-3xl font-extrabold text-skin-base sm:text-4xl">
                <span class="block">Registro</span>
            </h1>
            <br>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                        Nombre *
                    </label>
                    <input
                        class="appearance-none block w-full text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600"
                        id="nombre" type="text" placeholder="Nombre">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="correo">
                        Correo Electronico *
                    </label>
                    <input
                        class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 placeholder:text-violet-600"
                        id="correo" type="email" placeholder="example@mail.com">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="apellido_paterno">
                        Apellido Paterno *
                    </label>
                    <input
                        class="appearance-none block w-full text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600"
                        id="apellido_paterno" type="text" placeholder="Apellido Paterno">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contraseña">
                        Contraseña *
                    </label>
                    <input
                        class="appearance-none block w-full text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600"
                        id="contraseña" type="password" placeholder="Contraseña">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="apellido_materno">
                        Apellido Materno *
                    </label>
                    <input
                        class="appearance-none block w-full text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600"
                        id="apellido_materno" type="text" placeholder="Apellido Materno">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="confirmar_contraseña">
                        Confirmar contraseña *
                    </label>
                    <input
                        class="appearance-none block w-full text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600"
                        id="confirmar_contraseña" type="password" placeholder="Contraseña">
                </div>
            </div>
            <div class="flex justify-center items-center p-4">
                <button data-modal-hide="default-modal" type="button"
                    class="text-black bg-[#95D8EB] hover:bg-[#5EB2E5] focus:ring-4 focus:outline-none focus:ring-[#5EB2E5] font-medium text-sm px-5 py-2.5 text-center">Registrarse</button>
            </div>
        </form>
    </div>



</body>
<x-footer>
</x-footer>

</html>
