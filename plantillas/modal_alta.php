<!--Inicio Modal  alta-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elija marca y modelo/s</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <!--Inicio grupo de Botones Marca-->  
      <div class="btn-group col-12" role="group" aria-label="Basic radio toggle button group">

        <input type="radio" class="btn-check" name="bgrMarca" id="btnRadio1" autocomplete="off" value="Polaris" onchange="establecerMarca()">
        <label class="btn btn-outline-primary" for="btnRadio1">Polaris</label>

        <input type="radio" class="btn-check" name="bgrMarca" id="btnRadio2" autocomplete="off" value="Mercury" onchange="establecerMarca()">
        <label class="btn btn-outline-primary" for="btnRadio2">Mercury</label>

        <input type="radio" class="btn-check" name="bgrMarca" id="btnRadio3" autocomplete="off" value="Honda" onchange="establecerMarca()">
        <label class="btn btn-outline-primary" for="btnRadio3">Honda</label>
       
      </div>
      <!-- fin grupo de Botones Marca--> 

      <!-- Inicio de Modelos-->
       <div class="col p-3 d-flex justify-content-around ">

      <!--Inicio grupo de Botones Verticales Polaris-->  
      <div class="btn-group-vertical" role="group" aria-label="Vertical button group" id="ModelosPolaris"  style="display:none">

        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="Sportman 500 4x2" id="P-check1" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check1">Sportman 500 4x2</label>
        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="Sportman 500 4x4" id="P-check2" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check2">Sportman 500 4x4</label>
        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="Sportman 570 4x4" id="P-check3" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check3">Sportman 570 4x4</label>

        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="Ranger 700 4x4" id="P-check4" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check4">Ranger 700 4x4</label>
        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="Ranger 700 6x6" id="P-check5" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check5">Ranger 700 6x6</label>
        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="Ranger 900 4x4" id="P-check6" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check6">Ranger 900 4x4</label>

        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="IQ 600" id="P-check7" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check7">IQ 600</label>

        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="LX 500" id="P-check8" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check8">LX 500</label>
        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="LX 550" id="P-check9" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check9">LX 550</label>

        <input type="checkbox" class="btn-check check-Polaris" name="polaris[]" value="120 Pro" id="P-check10" autocomplete="off">
        <label class="btn btn-outline-primary" for="P-check10">120 Pro</label>
      
      </div> 

      <!-- fin grupo de Botones Verticales Polaris--> 

      <!--Inicio grupo de Botones Verticales Mercury-->  
      <div class="btn-group-vertical" role="group" aria-label="Vertical button group" id="ModelosMercury"  style="display:none">
  
        <input type="checkbox" class="btn-check check-Mercury" name="mercury[]" value="25HP 2cyl" id="M-check1" autocomplete="off">
        <label class="btn btn-outline-primary" for="M-check1">25HP 2cyl</label>

        <input type="checkbox" class="btn-check check-Mercury" name="mercury[]" value="40HP 2cyl" id="M-check2" autocomplete="off">
        <label class="btn btn-outline-primary" for="M-check2">40HP 2cyl</label>

        <input type="checkbox" class="btn-check check-Mercury" name="mercury[]" value="40HP 3cyl" id="M-check3" autocomplete="off">
        <label class="btn btn-outline-primary" for="M-check3">40HP 3cyl</label>

        <input type="checkbox" class="btn-check check-Mercury" name="mercury[]" value="50HP 2cyl" id="M-check4" autocomplete="off">
        <label class="btn btn-outline-primary" for="M-check4">50HP 2cyl</label>

        <input type="checkbox" class="btn-check check-Mercury" name="mercury[]" value="50HP 3cyl" id="M-check5" autocomplete="off">
        <label class="btn btn-outline-primary" for="M-check5">50HP 3cyl</label>

        <input type="checkbox" class="btn-check check-Mercury" name="mercury[]" value="150HP 6cyl" id="M-check6" autocomplete="off">
        <label class="btn btn-outline-primary" for="M-check6">150HP 6cyl</label>
        
      </div>
      <!-- fin grupo de Botones Verticales Mercury--> 

       <!--Inicio grupo de Botones Verticales Honda-->  
       <div class="btn-group-vertical" role="group" aria-label="Vertical button group" id="ModelosHonda" style="display:none">
  
            <input type="checkbox" class="btn-check check-Honda" name="honda[]" value="U1000" id="H-check1" autocomplete="off">
            <label class="btn btn-outline-primary" for="H-check1">U1000</label>

            <input type="checkbox" class="btn-check check-Honda" name="honda[]" value="U2000" id="H-check2" autocomplete="off">
            <label class="btn btn-outline-primary" for="H-check2">U2000</label>

            <input type="checkbox" class="btn-check check-Honda" name="honda[]" value="EG6500" id="H-check3" autocomplete="off">
            <label class="btn btn-outline-primary" for="H-check3">EG6500</label>

            <input type="checkbox" class="btn-check check-Honda" name="honda[]" value="ET12000" id="H-check4" autocomplete="off">
            <label class="btn btn-outline-primary" for="H-check4">ET12000</label>

            <input type="checkbox" class="btn-check check-Honda" name="honda[]" value="WB 20XH" id="H-check5" autocomplete="off">
            <label class="btn btn-outline-primary" for="H-check5">WB 20XH</label>

            <input type="checkbox" class="btn-check check-Honda" name="honda[]" value="WB 20XT" id="H-check6" autocomplete="off">
            <label class="btn btn-outline-primary" for="H-check6">WB 20XT</label>
            
        </div>
        <!-- fin grupo de Botones Verticales Honda--> 

        </div> 
        <!-- fin de Modelos-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="cargaModelos()" data-bs-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!--Fin Modal alta -->