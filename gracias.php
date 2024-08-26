<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2;url=https://www.youtube.com"> <!-- Cambia esta URL a la página a la que quieres redirigir -->
    <title>Gracias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #03f0b1;
        }

        .container {
            display: flex;
            max-width: 1000px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .left-section {
            background-image: url('imgs/ejemplo.jpg'); /* Asegúrate de que la ruta de la imagen sea correcta */
            background-size: cover;
            background-position: center;
            flex: 1;
            padding: 40px;
            color: white;
        }

        .right-section {
            flex: 1;
            padding: 40px;
            background-color: #121212;
            color: #00ff7f;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .right-section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .right-section h1 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <!-- Puedes agregar contenido aquí si lo deseas -->
        </div>
        <div class="right-section show">
            <h1>¡Gracias por confiar en nosotros!</h1>
            <p>Serás redirigido en unos segundos...</p>
        </div>
    </div>
    <script>
        // La animación de entrada para la sección derecha
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.right-section').classList.add('show');
        });
    </script>
</body>
</html>
