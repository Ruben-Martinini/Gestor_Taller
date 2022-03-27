<!--Inicio de form Eliminar-->
<section class="marco-principal">

<form class="row g-3 cont-form-insert" action="resultDelete.php?id=<?php echo $id; ?>" onsubmit="return alertEliminar()" method="post">
  <!-- Button trigger modal -->

    <div class="col-12 col-md-2 col-xl-4 ">    
    <input type="text" class="form-control" name="IMarca" id="inputMarca" value="<?php echo $mar; ?>"  disabled>
    </div>
    <div class="col-12 col-md-10 col-xl-8">    
    <input type="text" class="form-control" name="marca_modelo" id="inputModelo" value="<?php echo $modelosEdic; ?>"  disabled>
    </div>

    

  <div class="col-md-6">
    <label for="inputNparte" class="form-label">N° de Parte</label>
    <input type="text" class="form-control" name="nroparte" id="inputNparte" value="<?php echo $nro; ?>" disabled>
  </div>

  <div class="col-md-6">
    <label for="inputDesignacion" class="form-label">Designación</label>
    <input type="text" class="form-control" name="designa" id="inputDesignacion" value="<?php echo $des; ?>" disabled>
  </div>

  <div class="col-12">
    <label for="inputAplicacion" class="form-label">Aplicación</label>
    <input type="text" class="form-control" name="aplica" id="inputAplicacion" value="<?php echo $apl; ?>" disabled>
  </div>


  <div class="col-6 col-sm-4 col-xl-2">
  <label for="inputUbicacion" class="form-label">Ubicación</label>
    <input type="text" class="form-control" name="ubica" id="inputUbicacion" placeholder="Coordenadas" value="<?php echo $ubc; ?>" disabled>
  </div>

  <div class="col-6 col-sm-4 col-xl-2">
    <label for="inputCantidad" class="form-label">Cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="inputCantidad" placeholder="Cantidad" value="<?php echo $can; ?>" disabled>
  </div>

  <div class="col-6 col-sm-4 col-xl-12 align-self-end">
  
    <button type="submit" name="submitEliminar" class="btn btn-primary">Eliminar</button>
  </div>

</form>

</section>    
<!--fin de form Eliminar-->