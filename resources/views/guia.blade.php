<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('tu-imagen-de-fondo.jpg');
            /* Cambia a tu imagen */
            background-size: cover;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 200px;
            background-color: #E5E5E5;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar a {
            padding: 15px;
            margin-bottom: 5px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: #d0d0d0;
        }

        .content {
            flex-grow: 1;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            display: none;
            /* Ocultamos todo el contenido inicialmente */
        }

        h2 {
            color: #004680;
            font-size: 24px;
            border-bottom: 2px solid #004680;
            padding-bottom: 10px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .breadcrumb {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }

        /* Mostramos solo el contenido activo */
        .active {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Barra lateral -->
        <div class="sidebar">
            <a href="#" onclick="showContent('tema1')">Tema 1</a>
            <a href="#" onclick="showContent('tema2')">Tema 2</a>
            <a href="#" onclick="showContent('tema3')">Tema 3</a>
            <a href="#" onclick="showContent('tema4')">Tema 4</a>
            <a href="#" onclick="showContent('tema5')">Tema 5</a>
        </div>

        <!-- Contenido de los temas -->
        <div class="content active" id="tema1">
            <div class="breadcrumb">Inicio > Guía > Tema 1</div>
            <h2>Tema 1</h2>
            <p>Descripción del tema 1 y cómo usar esta sección. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>

        <div class="content" id="tema2">
            <div class="breadcrumb">Inicio > Guía > Tema 2</div>
            <h2>Tema 2</h2>
            <p>Descripción del tema 2 y sus instrucciones. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="content" id="tema3">
            <div class="breadcrumb">Inicio > Guía > Tema 3</div>
            <h2>Tema 3</h2>
            <p>Descripción del tema 3 con ejemplos detallados. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>

        <div class="content" id="tema4">
            <div class="breadcrumb">Inicio > Guía > Tema 4</div>
            <h2>Tema 4</h2>
            <p>Explicación del tema 4, con consejos y mejores prácticas. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.</p>
        </div>

        <div class="content" id="tema5">
            <div class="breadcrumb">Inicio > Guía > Tema 5</div>
            <h2>Tema 5</h2>
            <p>Descripción del tema 5 con algunos detalles técnicos. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit.</p>
        </div>
    </div>

    <script>
        // Función para mostrar el contenido del tema seleccionado
        function showContent(temaId) {
            // Ocultamos todo el contenido
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.classList.remove('active');
            });

            // Mostramos solo el contenido correspondiente
            var selectedContent = document.getElementById(temaId);
            selectedContent.classList.add('active');
        }
    </script>

</body>

</html>
