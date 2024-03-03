
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>

    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="build/css/style.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="<?php echo "/"?>">
                <img src="build/imagenes/logo-header.png" alt="municipio logo">
            </a>
        </div>

        <nav class="navegacion">
            <div class="herramientas">
                <li><a href="login.html">Iniciar sesion</a></li>
                <li><button onclick="alerta()"  class="help-btn">? Ayuda</button></li>
                <li><a class=" dark-mode-boton"><i class="bi bi-lightbulb-fill"></i></a></li>

            </div>
        </nav>
    </header>

    <?php echo $contenido;?>

    <script src="build/javascript/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <?php
    echo $script ?? '';
?>
</body>
</html>