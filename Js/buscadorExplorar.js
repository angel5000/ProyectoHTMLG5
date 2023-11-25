document.addEventListener("keyup", e => {
    if(e.target.matches("#buscador") ){//Si el elemento que se esta pulsando coincide con el id buscador
        document.querySelectorAll(".juego h6").forEach((juegoFiltrado) => {//Recorre todos los elementos con la clase juego y h6
            let juegoDiv = juegoFiltrado.closest('.juego');//Busca el elemento padre con la clase juego
            juegoFiltrado.textContent.toLowerCase().includes(e.target.value.toLowerCase())//Comprueba si el valor del input coincide con el valor del h6
            ? juegoDiv.classList.remove("filtro")//Si coincide elimina la clase filtro
            : juegoDiv.classList.add("filtro");//Si no coincide añade la clase filtro
        })// la clase filtro oculta el elemento
        console.log(e.target.value);//Muestra el valor del input para verificar que funciona
    }
});