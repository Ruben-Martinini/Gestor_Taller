<!--Inicio de form Altas-->
<section class="marco-principal">

<form class="row g-3 cont-form-insert" action="resultUpdate.php?id=<?php echo $id; ?>"  method="post">
  
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary col-4 " data-bs-toggle="modal" data-bs-target="#exampleModal" id="botonMarcaModelo" >
    <?php echo $mar; ?>
    </button>
    <div class="col-8 ">    
    <input type="text" class="form-control" name="marca_modelo" id="inputModelo" value="<?php echo $modelosEdic; ?>"  disabled>
    </div>

    <?php include 'plantillas/modal_alta.php'; ?>

  <div class="col-md-6">
    <label for="inputNparte" class="form-label">N° de Parte</label>
    <input type="text" class="form-control" name="nroparte" id="inputNparte" value="<?php echo $nro; ?>">
  </div>

  <div class="col-md-6">
    <label for="inputDesignacion" class="form-label">Designación</label>
    <input type="text" class="form-control" name="designa" id="inputDesignacion" value="<?php echo $des; ?>">
  </div>

  <div class="col-12">
    <label for="inputAplicacion" class="form-label">Aplicación</label>
    <input type="text" class="form-control" name="aplica" id="inputAplicacion" value="<?php echo $apl; ?>">
  </div>


  <div class="col-12">
    <label for="inputUbicacion" class="form-label">Ubicación </label>
    <input type="text" class="form-control" name="ubica" id="inputUbicacion" value="<?php echo $ubc; ?>">
  </div>
  


  <div class="col-6 col-sm-9 col-xl-10">
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>
</form>

</section>    
<!--fin de form Altas-->