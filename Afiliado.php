<?php
   include_once '../PHPGRUPO5/plantillas/Encabezado.php';
 session_start();
if(isset($_COOKIE['usuario_autenticado'])&&$_COOKIE['usuario_autenticado'] === 'true'&&
(isset($_SESSION['RolUsuario']) && $_SESSION['RolUsuario'] == 100) &&
    (isset($_SESSION['RolAfiliado']) && $_SESSION['RolAfiliado'] == 103)){

       

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="autor " content="Choez Villamar Andy Leonardo">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afiliado</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: linear-gradient(rgb(0, 0, 0), rgba(194, 182, 241, 0.952));
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
        }

        .barra {
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5); /* Ajusta el color de fondo de la barra de navegación */
            padding: 10px; /* Agrega un relleno a la barra de navegación */
        }

        header {
            display: flex;
            align-items: center;
        }

        h1 {
            margin-right: 10px;
        }

        .logo-img {
            height: 40px;
            width: 40px;
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-5px);
            }
        }

        .afiliado-section {
            flex-grow: 1; /* Hace que la sección de Afiliado ocupe todo el espacio restante */
        }

        .lista-juegos {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .juego {
            display: flex;
            justify-content: space-between;
            border: 1px solid #fff;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            transition: all 0.3s ease;
        }

        .juego:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .juego span {
            flex: 1;
            text-align: center;
            color: #fff; /* Cambia el color del texto a blanco */
        }

        .titulo {
            display: flex;
            align-items: center; /* Alinea verticalmente */
            justify-content: space-around; /* Espaciado equitativo */
            font-weight: bold;
            color: #fff; /* Cambia el color del texto a blanco */
            text-align: center;
            flex-direction: row; /* Alinea los elementos en fila */
            margin: 0 auto; /* Centra el contenido horizontalmente */
        }

        .titulo h2 {
            margin-bottom: 10px;
        }

        .nav-seccion {
            margin-top: 10px; /* Espacio entre el título y el enlace de navegación */
        }

        .uploader-section {
            margin-top: 20px;
            padding: 20px;
            border-radius: 5px;
            border: 2px solid rgba(142, 129, 192, 0.671);
            background: linear-gradient(rgb(0, 0, 0), rgba(125, 103, 212, 0.144));
            text-align: center; /* Alinea el texto al centro */
        }

        .file-input-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 20px;
        }

        .file-input {
            display: none;
        }

        .file-label {
            cursor: pointer;
            background-color: #010202;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .image-container {
            margin-right: 20px; /* Espacio entre la imagen y el título */
        }

        .filtro-section {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid rgba(142, 129, 192, 0.671);
            background: linear-gradient(rgb(0, 0, 0), rgba(125, 103, 212, 0.144));
            text-align: center; /* Alinea el texto al centro */
        }

        .filtro-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .filtro-titulo {
            font-weight: bold;
            color: #fff;
            margin-bottom: 10px;
        }

        .filtro-select {
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #fff;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .filtro-checkbox-container {
            display: flex;
            margin-bottom: 10px;
        }

        .filtro-checkbox {
            margin-right: 5px;
        }

        .filtro-label {
            color: #fff;
        }

        .filtro-btn {
            cursor: pointer;
            background-color: #010202;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>
<body>
    <div class="barra">
        <header>
            <div class="image-container">
                <img src="imagenes/juego.jpg" alt="jostick" class="logo-img">
            </div>
            <h1>Afiliado</h1>
        </header>
    </div>
    <section class="afiliado-section">
        <!-- Contenido de la sección Afiliado aquí -->
        <div class="filtro-section">
            <div class="filtro-container">
                <div class="filtro-titulo">Filtrar por categoría:</div>
                <select class="filtro-select" id="filtro-opcion">
                    <option value="categoria">Survival Horror</option>
                    <option value="categoria">Aventura</option>
                    <option value="categoria">Acción</option>
                    <option value="categoria">Suspenso</option>
                </select>
                <div class="filtro-checkbox-container">
                    <input type="checkbox" class="filtro-checkbox" id="juegos-costosos">
                    <label for="juegos-costosos" class="filtro-label">Juegos Costosos</label>
                </div>
                <div class="filtro-checkbox-container">
                    <input type="checkbox" class="filtro-checkbox" id="juegos-economicos">
                    <label for="juegos-economicos" class="filtro-label">Juegos Económicos</label>
                </div>
            </div>
            <button class="filtro-btn" onclick="aplicarFiltro()">Filtrar</button>
        </div>
        <div class="titulo">
            <h2>Juegos Subidos</h2>
            <div>Categoría</div>
            <div>Precio</div>
        </div>
        <ul class="lista-juegos">
            <li class="juego">
                <span>Alan Wake 2</span>
                <span>Survival Horror</span>
                <span>$47.99</span>
            </li>
            <li class="juego">
                <span>Return to Moria</span>
                <span>Aventura</span>
                <span>$49.99</span>
            </li>
            <li class="juego">
                <span>Ghostrunner 2</span>
                <span>Acción</span>
                <span>$59.99</span>
            </li>
            <li class="juego">
                <span>A Plague Tale: Requiem</span>
                <span>Suspenso</span>
                <span>$54.99</span>
            </li>
            <li class="juego">
                <span>Overwatch 2</span>
                <span>Shooter</span>
                <span>$59.99</span>
            </li>
            <li class="juego">
                <span>The Witcher 4: Vengeance</span>
                <span>Acción/RPG</span>
                <span>$49.99</span>
            </li>
            <li class="juego">
                <span>Celeste</span>
                <span>Plataforma</span>
                <span>$19.99</span>
            </li>
            <li class="juego">
                <span>Cities: Skylines</span>
                <span>Simulación</span>
                <span>$39.99</span>
            </li>
        </ul>
    </section>
    <section class="uploader-section">
        <!-- Contenido de la sección Uploader aquí -->
        <div class="titulo">
            <h2>Load Game Files</h2>
        </div>
        <div class="file-input-container">
            <label for="file-upload" class="file-label">Subir juego </label>
            <input type="file" id="file-upload" class="file-input">
        </div>
        <div class="image-container">
            <img src="imagenes/subir.png" alt="subir" width="150" height="96">
        </div>
    </section>
    <footer>
        &copy; 2023 Tienda de Videojuegos. Todos los derechos reservados.
    </footer>

    <script>
        function aplicarFiltro() {
            console.log("Filtro aplicado");
        }
    </script>
</body>
</html>
<?php
    
    } else {
        echo "ACCESO DENEGADO USUARIO NO AUTORIZADO";
    }
   
    ?>
