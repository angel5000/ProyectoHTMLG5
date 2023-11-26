var btcar=document.getElementById('btcarrito');
var btpag=document.getElementById('btpagar');

var btlist=document.getElementById('btlistdeseo');
var titulo=document.getElementById('titulo').innerText;
btcar.addEventListener('click',function(){
    alert(titulo+" Se agrego a su carrito de compras");

});
btlist.addEventListener('click',function(){
    alert(titulo+" Se agrego a su lista de deseos");

});
btpag.addEventListener('click',function(){
    
    location.href='Metodopago.html';

});