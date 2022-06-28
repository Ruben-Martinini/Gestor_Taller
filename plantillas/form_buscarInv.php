<!--Inicio de form Busqueda-->
<section class="marco-principal">
<form class="row g-3 cont-form-insert" action="listadoInv.php" onsubmit="return validarC()"  method="POST">

<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary col-4 col-md-2 col-xl-2  " data-bs-toggle="modal" data-bs-target="#exampleModal" id="botonMarcaModelo" >
      Marca-Modelo
    </button>
    <div class="col-8 col-md-2 col-xl-4 ">    
    <input type="text" class="form-control" name="IMarca" id="inputMarca" disabled>
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


  <div class="col-10">
    <button type="submit" class="btn btn-primary" name="submitBuscar">Buscar</button>
  </div>

 

</form>

</section>    
<!--fin de form busqueda-->