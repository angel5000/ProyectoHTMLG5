
const carrusel = document.getElementById('Micarrusel');
let intervalo = null;
const tiempoEntreImágenes = 5000; // 3000 milisegundos = 3 segundos

const start = () => {
  intervalo = setInterval(function () {
    carrusel.scrollLeft += 40;

    if (carrusel.scrollLeft >= carrusel.scrollWidth - carrusel.clientWidth) {
      carrusel.scrollLeft = 300;
      clearInterval(intervalo); // Detenemos el intervalo
      setTimeout(() => {
        start(); // Reiniciamos el carrusel después de un tiempo determinado
      }, tiempoEntreImágenes);
    }
  }, 40);
};

start();


/*const carrusel = document.getElementById('Micarrusel');
let intervalo=null;
const start =()=>{
intervalo=setInterval(function(params){
    carrusel.scrollLeft=carrusel.scrollLeft+2
    if(carrusel.scrollLeft===carrusel.scrollWidth-carrusel.clientWidth){
        carrusel.scrollLeft=0;
    }else if(carrusel.scrollLeft===0){
        carrusel.scrollLeft=0;
    }
},10);

};
 start();*/
    