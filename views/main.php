<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Level Fullstack</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid row">
        <!-- Barra de progreso -->
        <ul id="progressbar">
            <li class="active">Registro de personas</li>
            <li>Lista de personas registradas</li>
        </ul>
        <!-- Formulario -->
        <?php include("views/form_guardar_persona.php"); ?>
        <!-- Tabla -->
        <?php include("views/listado_personas.php"); ?>
    </div>

    <!--Footer-->
    <div class="footer">
        <i>🖌️</i> Creado por
        <a target="_blank" href="https://github.com/angeles-vs">Angeles Viña</a>
    </div>
    
    <!-- Index.js -->
    <script src="assets/js/index.js"></script>
</body>
</html>