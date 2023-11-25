

const imgs =document.querySelector(".imagenes");
let contenedor = documento.querySelector(".carrusel");
let imgultima =contenedor[contenedor.length-1];
imgs.insertAdjacentElement('afterbegin',imgultima);

function sgt(){
  
}

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
    