<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Envío GET y Creación de Cookie</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <nav>
        <form id="formTema" Method="get">
            <label for="Tema">Selecciona un tema:</label>
            <select name="cbtema" id="Tema">
            <option value="">Tema...</option>
                <?php
                $tema = array('Obscuro', 'Claro');
                foreach ($tema as $temas) {
                    echo "<option value=\"$temas\">$temas</option>";
                }
                ?>
            </select>
            <button type="submit" >Enviar</button>
        </form>
    </nav>

    <script>
        function enviarFormulario() {
            // Obtén el valor seleccionado
            var valorSeleccionado = $('#Tema').val();

            // Realiza una solicitud AJAX para enviar los datos al servidor (PHP)
            $.ajax({
                type: 'GET',
                url: 'Configuraciones.php',
                data: { cbtema: valorSeleccionado },
                success: function(response) {
                    console.log('Respuesta del servidor:', response);

                    // Crea una cookie en JavaScript (opcional)
                    document.cookie = 'temaSeleccionado=' + encodeURIComponent(valorSeleccionado) + '; expires=Thu, 01 Jan 2030 00:00:00 UTC; path=/';
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>

</body>
</html>



<?php
if (isset($_GET['cbtema'])) {
    // Obtén la preferencia de tema del GET
    $preferenciaTema = $_GET['cbtema'];

    // Establece la cookie con una duración de 365 días
    setcookie('temaSeleccionado', $preferenciaTema, time() + (365 * 24 * 60 * 60), '/');

    // Envía una respuesta (puedes personalizar según tus necesidades)
    echo json_encode(['status' => 'success', 'message' => 'Preferencia de tema actualizada con éxito.']);
} else {
    // Envía una respuesta de error si no se proporciona la preferencia de tema
    echo json_encode(['status' => 'error', 'message' => 'No se proporcionó la preferencia de tema.']);
}
?>