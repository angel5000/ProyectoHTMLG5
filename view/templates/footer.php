
<div>
  
<footer class="ftr" >
  <address>
    Contacto:<a href="correo@gmail.com">Correo@gmail.com</a>
    </address>
   
  <span class="spam">Tienda de VideoJuegos Proyecto Grupal, Grupo#5</span>.<br>
  <span>Síguenos en las redes sociales</span>.<br>
  
    <a href="https://www.facebook.com" >Facebook</a>
    <a href="https://www.twitter.com" > Twitter</a>


</footer>
</div>
<script src="Js/Carrusel.js"></script>
<script src="Js/Barramenu.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const cartLink = document.querySelector('.cart');
  const cartDropdown = document.querySelector('.cart-dropdown');

  cartLink.addEventListener('click', function() {
      cartDropdown.classList.toggle('show');
      <span class="cart-count"><?php echo $totalcantidad; ?>ghj</span>
      alert("sdfs");
  });
});
</script>
</body>

</html>