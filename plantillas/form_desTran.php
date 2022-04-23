<!--Inicio de form Descarga transferencia-->
<section class="marco-principal">

<form class="row g-3 cont-form-insert" action="resultUpdateStock.php?id=<?php echo $id; ?>&nr=<?php echo $nro; ?>&d1=<?php echo $dep1; ?>&d2=<?php echo $dep2; ?>&d3=<?php echo $dep3; ?>" onsubmit="return controlEleccion()"  method="POST">
<div class="col-md-12">
    <label  class="form-label">N° de Parte: <?php echo $nro; ?> </label>    
  </div>
<!--inicio display de distribución de stock-->
  <div class="row d-flex justify-content-evenly p-2 mb-2 border border-1 rounded-3 bg-light text-dark" >
    <div class="col-4 col-sm-3 col-xl-2">
      <label  class="form-label d-flex justify-content-center">DP1</label>
      <input type="text" class="form-control" name="StockDp1" id="inputStdp1" value="<?php echo $dep1; ?>" disabled>
    </div>

    <div class="col-4 col-sm-3 col-xl-2">
      <label  class="form-label d-flex justify-content-center">DP2</label>
      <input type="text" class="form-control" name="stockDp2" id="inputStdp2" value="<?php echo $dep2; ?>" disabled>
    </div>

    <div class="col-4 col-sm-3 col-xl-2">
      <label  class="form-label d-flex justify-content-center">DP3</label>
      <input type="text" class="form-control" name="stockDp3" id="inputStdp3" value="<?php echo $dep3; ?>" disabled>
    </div>
  </div>
<!--fin display de distribución de stock-->

<!--inicio de tablero de movimientos de  stock-->
  <div class="row  p-2 d-flex justify-content-evenly border border-1  rounded-3 bg-light text-dark" >
    
      <!--inicio tablero elección de tipo operación-->
          <div class="col-12 col-sm-3 col-xl-2 p-2 border border-1 align-self-center bg-light text-dark">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radioTipoMov" id="formRadioTransferir" onchange="establecerTipoOperacion()" value="Transferir">
              <label class="form-check-label" for="formRadioTransferir">Transferir</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radioTipoMov" id="formRadioDescarga"  onchange="establecerTipoOperacion()" value="Descargar" checked>
              <label class="form-check-label" for="formRadioDescarga">Descargar</label>
            </div>
          </div>
      <!--fin tablero elección de tipo operación-->
  

  <div class="col-12 col-sm-8 col-xl-9 d-flex justify-content-evenly  p-2 border border-1"> 
    
      <!--inicio tablero  operación TRANSFERENCIA-->          
         
              <div class="col-4 col-sm-3 p-2 border border-1 bg-light text-dark rounded-3 " id="desde" style="display:none" >
                <label class="d-flex justify-content-center fw-bold" >DESDE</label>  
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radioDesde" id="formRadioDeDp1" value="dp1" checked>
                  <label class="form-check-label" for="formRadioDeDp1">DP1</label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="radioDesde" id="formRadioDeDp2" value="dp2" >
                  <label class="form-check-label" for="formRadioDeDp2">DP2</label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="radioDesde" id="formRadioDeDp3" value="dp3" >
                  <label class="form-check-label" for="formRadioDeDp3">DP3</label>
                </div>
              </div>
              
              <div class="col-4 col-sm-3 p-2 border border-1 bg-light text-dark rounded-3" id="hacia" style="display:none">
                <label class="d-flex justify-content-center fw-bold">HACIA</label>  
                <div class="form-check  ">
                  <input class="form-check-input" type="radio" name="radioHacia" id="formRadioHaciaDp1" value="dp1" checked>
                  <label class="form-check-label" for="formRadioHaciaDp1">DP1</label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="radioHacia" id="formRadioHaciaDp2" value="dp2"  >
                  <label class="form-check-label" for="formRadioHaciaDp2">DP2</label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="radioHacia" id="formRadioHaciaDp3" value="dp3" >
                  <label class="form-check-label" for="formRadioHaciaDp3">DP3</label>
                </div>
              </div>
              <div class="col-4 col-sm-3 p-2 border border-1 bg-light text-dark rounded-3" id="cantT" style="display:none">
                <label  class="form-label d-flex justify-content-center">Cantidad</label>
                <input type="number" class="form-control" name="cantTransferir" id="inputCantidadT">
              </div>
          
      <!--fin tablero  operación TRANSFERENCIA-->
      
        
      <!--inicio tablero  operación DESCARGA-->
      
              
              <div class="col-6 col-sm-3 p-2 border border-1 bg-light text-dark rounded-3" id="depo" >
                <label class="d-flex justify-content-center fw-bold" >DEPOSITO</label>  
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radioDescarga" id="formRadioDesDp1" value="dp1" checked>
                  <label class="form-check-label" for="formRadioDesDp1">DP1</label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="radioDescarga" id="formRadioDesDp2"  value="dp2">
                  <label class="form-check-label" for="formRadioDesDp2">DP2</label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="radioDescarga" id="formRadioDesDp3" value="dp3" >
                  <label class="form-check-label" for="formRadioDesDp3">DP3</label>
                </div>
              </div>
              
              
              <div class="col-4 col-sm-3 p-2 border border-1 bg-light text-dark rounded-3" id="canD" >
                <label  class="form-label d-flex justify-content-center">Cantidad</label>
                <input type="number" class="form-control" name="cantDescargar" id="inputCantidadD">
              </div>
        
      <!--fin tablero  operación DESCARGA-->
    </div>

  </div>
<!--inicio de tablero de movimientos de  stock-->

  <div class="col-6 col-sm-4 col-xl-5">
    <button type="submit" class="btn btn-primary" >Ejecutar</button>
  </div>
</form>
<div class="col">
    <p><?php echo $err; ?></p>
  </div>
  
</form>

</section>    
<!--fin de form Descarga transferencia-->