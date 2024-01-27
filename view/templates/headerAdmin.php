<?php include_once '../PHPGRUPO5/plantillas/Encabezado.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu Sitio Web</title>
    <style>
        .header {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }
        .nav-bar {
            overflow: hidden;
            background-color: #333;
        }
        .nav-bar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .nav-bar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>



<div class="nav-bar">
    <a href="index.php?c=Cliente&f=index&=AdmClientes">Clientes</a>
    <a href="index.php?c=Juegos&f=index&=AdmJuegos">Juegos</a>
    <a href="modulo3.php">Módulo 3</a>
    <a href="modulo4.php">Módulo 4</a>
</div>

</body>
</html>
