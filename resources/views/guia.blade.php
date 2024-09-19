<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de Usuario</title>

    <!-- Importar fuentes desde Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..800&family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Añadir las clases de fuente personalizada para Tailwind */
        .font-jetbrains {
            font-family: 'JetBrains Mono', monospace;
        }

        .font-kode {
            font-family: 'Kode Mono', monospace;
        }
    </style>
</head>
<x-header></x-header>
<body class="bg-cover bg-no-repeat font-jetbrains" style="background-image: url('tu-imagen-de-fondo.jpg');">

    <div class="flex h-screen">
        <!-- Barra lateral -->
        <div class="w-48 bg-blue-50 p-5 flex flex-col shadow-lg">
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('tema1')" id="tema1-link">Tema 1</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('tema2')" id="tema2-link">Tema 2</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('tema3')" id="tema3-link">Tema 3</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('tema4')" id="tema4-link">Tema 4</a>
            <a href="#" class="p-3 mb-2 font-bold text-black hover:bg-blue-100 border-l-4 border-transparent hover:border-blue-500 font-kode" onclick="showContent('tema5')" id="tema5-link">Tema 5</a>
        </div>

        <!-- Contenido de los temas -->
        <div class="flex-grow p-10" style="background: linear-gradient(to bottom right, #f0f7ff, #d6e4f0);">
            <div class="bg-white rounded-lg shadow-lg p-10 font-jetbrains">
                <div id="content">
                    <!-- Se mostrará el contenido del tema aquí -->
                    <h2 class="text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2">Bienvenido</h2>
                    <p class="text-lg text-gray-600 mt-4">
                        Selecciona un tema en el menú para ver más detalles.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para mostrar el contenido del tema seleccionado
        function showContent(temaId) {
            // Cambiar el contenido
            var contents = {
                'tema1': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Tema 1</h2><p class='text-lg text-gray-600 mt-4'>Descripción del tema 1 y cómo usar esta sección.</p>",
                'tema2': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Tema 2</h2><p class='text-lg text-gray-600 mt-4'>Descripción del tema 2 y sus instrucciones.</p>",
                'tema3': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Tema 3</h2><p class='text-lg text-gray-600 mt-4'>Descripción del tema 3 con ejemplos detallados.</p>",
                'tema4': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Tema 4</h2><p class='text-lg text-gray-600 mt-4'>Explicación del tema 4, con consejos y mejores prácticas.</p>",
                'tema5': "<h2 class='text-3xl text-blue-700 font-semibold border-b-2 border-blue-700 pb-2 font-kode'>Tema 5</h2><p class='text-lg text-gray-600 mt-4'>Descripción del tema 5 con algunos detalles técnicos.</p>",
            };
            document.getElementById('content').innerHTML = contents[temaId];

            // Actualizar el estado activo del índice
            var links = document.querySelectorAll('.sidebar a');
            links.forEach(link => link.classList.remove('border-blue-500'));
            document.getElementById(temaId + '-link').classList.add('border-blue-500');
        }
    </script>

</body>
<x-footer></x-footer>
</html>
