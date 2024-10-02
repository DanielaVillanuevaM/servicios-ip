<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acuerdos de Uso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .modal {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
        }

        .modal h2 {
            text-align: center;
            color: #5a3db7;
        }

        .modal p {
            height: 150px;
            overflow-y: scroll;
            padding-right: 10px;
            margin-bottom: 20px;
        }

        .modal button {
            width: 100%;
            padding: 10px;
            background-color: #5a3db7;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal button:hover {
            background-color: #4833a0;
        }
    </style>
</head>

<body>
    <div class="modal">
        <h2>Acuerdos de Uso</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Nunc sed augue lacus viverra vitae congue. Vel quam elementum pulvinar etiam non quam lacus.
            Lectus vestibulum mattis ullamcorper velit. Dictum non consectetur a erat nam at lectus urna. Nulla at
            volutpat diam ut venenatis tellus in metus vulputate. Sit amet mauris commodo quis imperdiet massa
            tincidunt. Risus sed vulputate odio ut enim blandit volutpat maecenas volutpat blandit.</p>
        <button id="aceptoBtn">Acepto</button>
    </div>

    <script>
        // Agrega el evento para cerrar el modal cuando se haga clic en el botón "Acepto"
        document.getElementById('aceptoBtn').addEventListener('click', function() {
            // Aquí puedes añadir cualquier lógica adicional cuando el usuario acepte los acuerdos
            window.location.href = "index.php"; // Redirige al usuario después de aceptar
        });
    </script>
</body>

</html>
