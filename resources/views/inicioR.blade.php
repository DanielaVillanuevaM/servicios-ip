<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro para Escaneo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4ff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .scan-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .scan-box h2 {
            color: #5a3db7;
        }

        .scan-box input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .scan-box button {
            width: 100%;
            padding: 10px;
            background-color: #5a3db7;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .scan-box button:hover {
            background-color: #4833a0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="scan-box">
            <h2>Registro para Escaneo</h2>
            <form action="resultados_escaneo.php" method="POST">
                <label for="ip">Dirección IP *</label>
                <input type="text" id="ip" name="ip" placeholder="XXX.XXX.XXX.XXX" required>

                <label for="tipo-escaneo">Tipo de Escaneo *</label>
                <select id="tipo-escaneo" name="tipo_escaneo" required>
                    <option value="">Seleccionar...</option>
                    <option value="Escaneo completo">Escaneo completo</option>
                    <option value="Escaneo rápido">Escaneo rápido</option>
                </select>

                <label for="tipo-script">Tipo de Script *</label>
                <select id="tipo-script" name="tipo_script" required>
                    <option value="">Seleccionar...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>

                <button type="submit">Escanear</button>
            </form>
        </div>
    </div>
</body>

</html>
