<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acuerdos de Uso</title>

    <!-- Importar fuentes desde Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..800&family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Añadir las clases de fuente personalizada */
        .font-jetbrains {
            font-family: 'JetBrains Mono', monospace;
        }

        .font-kode {
            font-family: 'Kode Mono', monospace;
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen bg-black bg-opacity-50">

    <div class="bg-white w-80 p-6 rounded-lg shadow-lg relative font-jetbrains">
        <!-- Título -->
        <h2 class="text-center font-bold text-lg mb-4 font-kode">Uso de Cookies</h2>

        <!-- Contenido del acuerdo -->
        <div class="h-32 overflow-y-scroll p-2 bg-blue-100 border-l-4 border-blue-400 rounded">
            <p class="text-sm text-gray-700 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Senectus et netus et malesuada fames. Nunc sed augue lacus viverra vitae congue eu consequat. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. At ultrices mi tempus imperdiet nulla malesuada. At quis risus sed vulputate odio. Tellus orci ac auctor augue. Vel risus commodo viverra maecenas.
            </p>
        </div>

        <!-- Botón de aceptar -->
        <button class="mt-4 w-full bg-blue-400 hover:bg-blue-500 text-white py-2 rounded font-semibold transition duration-200 font-kode">
            Acepto
        </button>
    </div>

</body>

</html>
