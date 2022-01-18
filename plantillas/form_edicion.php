<!--Inicio de form Altas-->
<section class="marco-principal">

<form class="row g-3 cont-form-insert" action="resultUpdate.php?id=<?php echo $id; ?>"  method="post">
  
<div class="contain-check-marcas" >
  <div class="form-check-inline" >
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Polaris" <?php if(strtoupper($mar) == "POLARIS"){echo 'checked';} ?>>
  <label class="form-check-label" for="inlineRadio1">Polaris</label>
  </div>

  <div class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Mercury" <?php if(strtoupper($mar) == "MERCURY"){echo 'checked';} ?>>
  <label class="form-check-label" for="inlineRadio2">Mercury</label>
  </div>

  <div class="form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Honda" <?php if(strtoupper($mar) == "HONDA"){echo 'checked';} ?>>
  <label class="form-check-label" for="inlineRadio3">Honda</label>
  </div>
</div>

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

  <div class="col-6 col-sm-3 col-xl-2">   
    <input type="number" class="form-control" name="cantidad"  value="<?php echo $can; ?>">
  </div>

</form>

</section>    
<!--fin de form Altas-->