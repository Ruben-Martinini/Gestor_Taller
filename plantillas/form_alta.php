<!--Inicio de form Altas-->
<section class="marco-principal">

<form class="row g-3 cont-form-insert" action="resultInsert.php" onsubmit="return validar()" method="POST">
  
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary col-4 col-md-2 col-xl-2  " data-bs-toggle="modal" data-bs-target="#exampleModal" id="botonMarcaModelo" name="bgrMarca">
      Marca-Modelo
    </button>
    <div class="col-8 col-md-2 col-xl-4 ">    
    <input type="text" class="form-control" name="IMarca" id="inputMarca"  disabled>
    </div>
    <div class="col-12 col-md-8 col-xl-6">    
    <input type="text" class="form-control" name="marca_modelo" id="inputModelo" disabled>
    </div>

    <?php include 'plantillas/modal_alta.php'; ?>

  <div class="col-md-6">
    <label for="inputNparte" class="form-label">N° de Parte</label>
    <input type="text" class="form-control" name="nroparte" id="inputNparte">
  </div>

  <div class="col-md-6">
    <label for="inputDesignacion" class="form-label">Designación</label>
    <input type="text" class="form-control" name="designa" id="inputDesignacion">
  </div>

  <div class="col-12">
    <label for="inputAplicacion" class="form-label">Aplicación</label>
    <input type="text" class="form-control" name="aplica" id="inputAplicacion" placeholder="Especifique la función">
  </div>

  <div class="col-4 col-sm-3 col-xl-2">
    
    <input type="text" class="form-control" name="ubica" id="inputUbicacion" placeholder="Coordenadas">
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
    <input type="text" class="form-control" name="FormaAdquisicion" id="inputFormaAdquisicion" value="26--OC" > 
  </div>

  <div class="col-6 col-sm-9 col-xl-10">
    <button type="submit" name="submitAlta" class="btn btn-primary">Ingresar</button>
  </div>

  <div class="col-6 col-sm-3 col-xl-2">   
    <input type="number" class="form-control" name="cantidad" id="inputCantidad" placeholder="Cantidad">
  </div>

  

</form>

</section>    
<!--fin de form Altas-->