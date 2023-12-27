let registerButton = document.querySelector('.register'); // Asegúrate de seleccionar el botón correcto

registerButton.addEventListener('click', function(event) {
    event.preventDefault();

    // Verificar si todos los campos de entrada están llenos
    let allFilled = Array.from(inputs).every(input => input.value !== '');

    if (allFilled) {
        // Seleccione el elemento con la clase 'oculto'
        const ocultoElement = document.querySelector('.oculto');

        // Cambie el estilo de visualización del elemento oculto
        ocultoElement.style.display = 'block';
         alert('Registro exitoso');
         
        // Limpiar todos los campos del formulario
        form.reset();
    } else {
        // Mostrar una alerta si no todos los campos están llenos
        alert('Por favor, llena todos los campos del formulario.');
    }
});


