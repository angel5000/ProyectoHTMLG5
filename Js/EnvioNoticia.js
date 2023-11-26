document.getElementById('registroForm').addEventListener('submit', function (event) {
    // validación del formulario con JavaScript vanilla
    if (!validarFormulario()) {
      event.preventDefault();
    }else{
        alert("Informacion enviada");
    }
  });

  function validarFormulario() {
    let nombre = document.getElementById('nombre').value;
    let correo = document.getElementById('correo').value;
    let edad = document.getElementById('edad').value;
    let consola = document.getElementById('consola').value;
    let genero = document.querySelector('input[name="genero"]:checked');

    limpiarMensajes();

    if (nombre === '') {
      mostrarMensajeError('Nombre es requerido', 'nombre');
      return false;
    }

    if (correo === '') {
      mostrarMensajeError('Correo Electrónico es requerido', 'correo');
      return false;
    } else if (!validarCorreo(correo)) {
      mostrarMensajeError('Correo Electrónico no es válido', 'correo');
      return false;
    }

    if (edad === '') {
      mostrarMensajeError('Edad es requerida', 'edad');
      return false;
    }

    if (consola === '0') {
      mostrarMensajeError('Debe seleccionar una consola', 'consola');
      return false;
    }

    if (!genero) {
      mostrarMensajeError('Debe seleccionar un género', 'genero');
      return false;
    }

    return true;
  }

  function validarCorreo(correo) {
    let regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regexCorreo.test(correo);
  }

  function mostrarMensajeError(mensaje, elementoId) {
    let elemento = document.getElementById(elementoId);
    elemento.focus();
    let nodoPadre = elemento.parentNode;
    let nodoMensaje = document.createElement("span");
    nodoMensaje.textContent = mensaje;
    nodoMensaje.className = "mensajeError";
    nodoPadre.appendChild(nodoMensaje);
  }

  function limpiarMensajes() {
    let mensajes = document.querySelectorAll(".mensajeError");
    for (let i = 0; i < mensajes.length; i++) {
      mensajes[i].remove();
    }
  }
