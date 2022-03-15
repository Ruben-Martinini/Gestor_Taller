<!--Inicio de form Altas-->
<section class="marco-principal">

<form class="row g-3 cont-form-insert" action="resultDeleteAlta.php?id=<?php echo $id; ?>"  method="post">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary col-4 col-md-2 col-xl-2 " data-bs-toggle="modal" name="bgrMarca"
data-bs-target="#exampleModal" id="botonMarcaModelo" disabled>
    Marca-Modelo
    </button>
    <div class="col-8 col-md-2 col-xl-4 ">    
    <input type="text" class="form-control" name="IMarca" id="inputMarca" value="<?php echo $mar; ?>"  disabled>
    </div>
    <div class="col-12 col-md-8 col-xl-6">    
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


  <div class="col-4 col-sm-3 col-xl-2">
    
    <input type="text" class="form-control" name="ubica" id="inputUbicacion" placeholder="Coordenadas" value="<?php echo $ubc; ?>" disabled>
  </div>
  <div class="col-4 col-sm-3 col-xl-3">
  
    <select class="form-select" id="formAdqElegida" onchange="eligeA()">
    <option value="26--OC" selected>OC</option>
    <option value="PNUD OC-">PNUD</option>
    <option value="Caja chica">Caja chica</option>
    <option value="">otros</option>
    </select>
  </div>
 
  <div class="col-4 col-sm-6 col-xl-7">    
    <input type="text" class="form-control" name="FormaAdquisicion" id="inputFormaAdquisicion" value="<?php echo $oc; ?>"  disabled> 
  </div>

  <div class="col-6 col-sm-9 col-xl-10">
    <button type="submit" name="submitEliminar" class="btn btn-primary">Eliminar</button>
  </div>

  <div class="col-6 col-sm-3 col-xl-2">   
    <input type="number" class="form-control" name="cantidad" id="inputCantidad" placeholder="Cantidad" value="<?php echo $can; ?>" disabled>
  </div>

</form>

</section>    
<!--fin de form Altas-->