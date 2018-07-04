<?php 
$active = "contacto";
include("header-articulo.php");?>
<div class="contacto">

<h2 class="hidden-xs">¿Tienes alguna propuesta que hacernos?</h2>
<h2>Ponte en contacto con nosotros sin interferencias</h2>

<div class="row">
    <form>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="campos col-lg-12"><input type="text" name="nombre" placeholder="Nombre" title="Required" required >
        </div>
        <div class="campos col-lg-12">
            <input type="text" name="email" placeholder="Correo">
        </div>
    
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6"> 
        <textarea placeholder="Mensaje"></textarea>    
    </div>
    <div class="enviar"><input type="submit" value="ENVIAR"></div>
        </form>
   <h3>"Voy a hacerle una oferta que no podrá rechazar" <span>- El padrino (1972)</span></h3>
</div>
</div>
    
    <?php include("footer.php");?>