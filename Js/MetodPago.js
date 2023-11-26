

    function procesarPago() {
        var metodoPago = document.querySelector('input[name="payment"]:checked');
        // Verificar si se seleccionó un método de pago
        if (metodoPago) {
            // Redirigir según la opción seleccionada
            if (metodoPago.id === 'tarjeta') {
                window.location.href = 'Tarjeta.html';
            } else if (metodoPago.id === 'paypal') {
                window.location.href = 'https://www.paypal.com';
            }
        } else {
            alert('Por favor, selecciona un método de pago antes de hacer clic en "Pagar".');
        }
    }
    var boton =document.getElementById('btpagar');
    boton.addEventListener('click',function(){
    procesarPago();
    
    });
