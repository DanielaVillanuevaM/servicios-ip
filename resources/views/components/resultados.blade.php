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

<body class="antialiased bg-bottom font-jetbrains bg-no-repeat bg-fixed" style="background-image: url('fondo.png')">
    <span class="sm:m-6 block text-black">Inicio > Guía de Usuarios...</span>
    
    <div class="relative bg-[#95D8EB] w-full h-32 bg-opacity-60 flex">
        <h1 class="sm:m-6 text-3xl font-extrabold text-skin-base sm:text-4xl">
            <span class="block">Resultado del Escaneo</span>
        </h1>
    </div>

    <div class="flex h-screen backdrop-filter backdrop-blur-sm">
        

        <!-- Barra lateral -->
        <div class="w-1/4 bg-blue-50 bg-opacity-80 p-5 flex flex-col shadow-lg">
            <a class="font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode">Indice</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('resultado')" id="tema2-link">Resultado</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('puertos')" id="tema3-link">Puertos/Host</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('topologia')" id="tema4-link">Topologia</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('detalles')" id="tema5-link">Detalles del host</a>
        </div>

        <!-- Contenido de los temas -->
        <div class="w-3/4 p-10 bg-white bg-opacity-5 backdrop-filter backdrop-blur-lg rounded-lg shadow-lg font-jetbrains">
            <div id="content">
                <!-- Se mostrará el contenido del tema aquí -->
                <h2 class="text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2">Bienvenido</h2>
                <p class="text-lg text-gray-600 mt-4">
                    Selecciona un apecto en el menú para ver más detalles.
                </p>
            </div>
        </div>

    </div>
    <script>
        // Función para mostrar el contenido del tema seleccionado
        function showContent(temaId) {
            // Cambiar el contenido
            var contents = {
                'resultado': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Resultado</h2><p class='text-lg text-gray-600 mt-4'>Descripción de Resultados.</p>",
                'puertos': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Puertos/Host</h2><p class='text-lg text-gray-600 mt-4'>Tabla de Puertos/Host.</p>",
                'topologia': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Topologia</h2><p class='text-lg text-gray-600 mt-4'>Imagen de la Topologia.</p>",
                'detalles': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Detalles del Host</h2><p class='text-lg text-gray-600 mt-4'>Host Status, Adresses and Comments.</p>",
            };
            document.getElementById('content').innerHTML = contents[temaId];

            // Actualizar el estado activo del índice
            var links = document.querySelectorAll('.sidebar a');
            links.forEach(link => link.classList.remove('border-blue-500'));
            document.getElementById(temaId + '-link').classList.add('border-blue-500');
        }
    </script>

</body>

</html>
