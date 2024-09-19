<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Escaneo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4ff;
        }

        .container {
            padding: 20px;
        }

        .scan-results {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h2 {
            color: #5a3db7;
        }

        .topology img {
            max-width: 100%;
        }

        .host-details {
            margin-top: 20px;
        }

        .host-details ul {
            list-style-type: none;
            padding: 0;
        }

        .host-details ul li {
            margin-bottom: 8px;
        }

        .comments {
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="scan-results">
            <h2>Resultados del Escaneo</h2>
            <p><strong>IP Escaneada:</strong> 192.168.100.129</p>
            <div class="topology">
                <h3>Topología</h3>
                <img src="topology.png" alt="Topología de la red">
            </div>
            <div class="host-details">
                <h3>Detalles del Host</h3>
                <ul>
                    <li><strong>Estado del Host:</strong> Activo</li>
                    <li><strong>Puertos abiertos:</strong> 7</li>
                    <li><strong>Dirección IPv4:</strong> 192.168.100.129</li>
                </ul>
            </div>
            <div class="comments">
                <p>No se encontraron más detalles.</p>
            </div>
        </div>
    </div>
</body>

</html>
