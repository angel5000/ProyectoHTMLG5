<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Página de noticias de la tienda de videojuegos">
  <meta name="author" content="Choez Villamar Andy Leonardo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noticias - Videojuegos</title>
  <!-- Enlace a la hoja de estilo externa -->
  <link rel="stylesheet" href="stylenoticias.css" type="text/css">
  <!-- Hoja de estilo interna para esta página -->
  <style>
    /* Agrega estilos específicos si es necesario */
    .mensajeError {
      color: red;
    }
  </style>
</head>

<body>
  <!-- Encabezado de la página -->
  <header>
    <!-- Título principal de la página -->
    <h1 id="titP">Noticias-Videojuegos</h1>
    <!-- Barra de navegación -->

  </header>

  <!-- Contenedor de noticias -->
  <section class="noticias-container">
    <!-- Noticia 1 -->
    <section class="noticia noticia-float">
      <h2 class="titulo-noticia">Alan Wake 2: ¿Hace falta haber jugado el primero para disfrutarlo y seguir su historia?</h2>
      <p class="contenido-noticia">Este 27 de octubre, Remedy Entertainment (Max Payne, Quantum Break) y Epic Games Publishing
        han estrenado en formato digital Alan Wake 2, un survival horror que está siendo alabado por la crítica. Es un juego diferente a su predecesor lanzado en 2010, que era un thriller de acción,
        pero no por ello deja de ser una continuación. Así las cosas,
        ¿hace falta jugar el primer Alan Wake para disfrutar de este?</p>
      <p class="fecha-noticia">Fecha: 27/08/2023</p>
      <img class="noticia-img" src="imagenes/noticia1.jpg" alt="Noticia 1">
    </section>

    <!-- Noticia 2 -->
    <div class="noticia noticia-float">
      <h2 class="titulo-noticia">Fire Emblem Engage - lanzamiento</h2>
      <p class="contenido-noticia">Fire Emblem Engage es un videojuego de rol táctico de corte japonés desarrollado por Nintendo e Intelligent System para Nintendo Switch. Forma parte de la veterana saga Fire Emblem, una de las más importantes en ecosistemas de Nintendo. En esta ocasión, esta entrega apuesta por un estilo artístico más colorido
        que renueva la imagen por otra más vibrante y más impactante, contándonos una historia
        sobre un dragón divino, Alear, que derrotó a un mal antiguo encarnado por Sombron,
        en un mundo de fantasía llamado Elyos.</p>
      <p class="fecha-noticia">Fecha: 20/1/2023</p>
      <p class="genero-noticia">Género: Tactical RPG</p>
      <img class="noticia-img" src="imagenes/noticia3.jpg" alt="Noticia 3">
    </div>

    <!-- Noticia 3 -->
    <section class="noticia noticia2">
      <h2 class="titulo-noticia">El Fatality de pago de Mortal Kombat 1 para celebrar Halloween
        ya tiene precio e irrita a los jugadores</h2>
      <p class="contenido-noticia">Halloween, la noche de los muertos, está a la vuelta de la esquina y para celebrarlo
        son muchos los videojuegos que están preparando eventos o contenido especial exclusivo
        para esta festividad que a día de hoy se celebra en todo el mundo.
        Uno de estos títulos que quieren proporcionar contenido adicional en Halloween es Mortal Kombat 1,
        el juego de lucha de NetherRealm Studios que ya anunció hace unos días algo terrorífico para el bolsillo
        de la comunidad, que no es otra cosa que el lanzamiento de un Fatality de pago que está disponible desde hace unas horas.
      </p>
      <p class="fecha-noticia">28/10/2023</p>
      <img class="noticia-img" src="imagenes/noticia2.jpg" alt="Noticia 2">
    </section>

    <!-- Noticia 4 -->
    <section class="noticia noticia4">
      <h2 class="titulo-noticia">Returnal PC - lanzamiento</h2>
      <p class="contenido-noticia">Se trata de un título diferente a todos los anteriores del estudio,
        que había sido videojuegos twin stick shooters. En esta ocasión, sus creadores han apostado
        por ofrecernos una aventura en tercera persona de ciencia ficción con toques de terror
        en la que una mujer parece revivir una y otra vez una serie de traumáticas experiencias
        en un planeta lleno de criaturas surgidas de la más retorcidas de las pesadillas. Hablamos
        del juego más ambicioso del equipo, un shooter en tercera persona de gran presupuesto.</p>
      <p class="fecha-noticia">Fecha: 15/2/2023</p>
      <p class="genero-noticia">Género: Aventura de acción / Terror</p>
      <img class="noticia-img" src="imagenes/noticia4.jpg" alt="Noticia 4">
    </section>

  </section>

  <!-- Formulario de registro -->
  <section id="formulario" style="background-color: #f9f9f9; border: 1px solid #ccc; padding: 20px; border-radius: 10px;">
    <h2 style="text-align: center;">Registro para Recibir Noticias</h2>
    <!-- Formulario con identificador para aplicar estilos específicos -->
    <form action="#" method="post" id="registroForm">
      <!-- Campos de formulario con identificadores para aplicar estilos específicos -->
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" class="formulario-input"><br><br>

      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo" class="formulario-input"><br><br>

      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad" class="formulario-input"><br><br>

      <label for="consola">Consola Favorita:</label>
      <select id="consola" name="consola" class="formulario-input">
        <option value="0">Selecciona una consola</option>
        <option value="ps5">PlayStation 5</option>
        <option value="xboxsx">Xbox Series X</option>
        <option value="switch">Nintendo Switch</option>
      </select><br><br>

      <label>Género Favorito:</label>
      <input type="radio" id="accion" name="genero" value="accion" class="formulario-input">
      <label for="accion">Acción</label>
      <input type="radio" id="aventura" name="genero" value="aventura" class="formulario-input">
      <label for="aventura">Aventura</label>
      <input type="radio" id="estrategia" name="genero" value="estrategia" class="formulario-input"><br><br>

      <input type="submit" value="Enviar" class="formulario-submit">
    </form>
  </section>

  <!-- Pie de página -->
  <footer>
    <!-- Información del pie de página -->
    <p>&copy; 2023 Tienda de Videojuegos. Todos los derechos reservados.</p>
  </footer>

  <!-- Script de interacción utilizando JavaScript vanilla -->
  <script src="Js/EnvioNoticia.js">
      </script>
</body>

</html>
