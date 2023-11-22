// Seleccionar el botón de registro
const registerButton = document.querySelector('.boton');

// Selecccionar el formulario y todos los campos de entrada
const form = document.querySelector('form');
const inputs = form.querySelectorAll('input');

registerButton.addEventListener('click', function() {
    // Cverificar si todos los campos de entrada están llenos
    let allFilled = Array.from(inputs).every(input => input.value !== '');

    if (allFilled) {
        // Selecccione el elemento con la clase 'oculto'
        const ocultoElement = document.querySelector('.oculto');

        // cambie el estilo de visualización del elemento oculto
        ocultoElement.style.display = 'block';
    } else {
        // mostrar una alerta si no todos los campos están llenos
        alert('Por favor, llena todos los campos del formulario.');
    }
});
const okButton = document.querySelector('.ok');

// Añaadir un evento de clic al botón ok
okButton.addEventListener('click', function() {
    // Selecccione el elemento con la clase 'oculto'
    const ocultoElement = document.querySelector('.oculto');

    // Cambiar el estilo de visualización del elemento oculto
    ocultoElement.style.display = 'none';
});

