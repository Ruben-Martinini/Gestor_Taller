<!-- Inicio de listado de resultados -->
<section id="container-lista" class="pt-3 pb-3">
      

        <!--Categorias-->

        <div class="row">
          <div class="col text-uppercase text-center">
          
         
            <p> Resultados</p>
            
          </div>
        </div>
        
        <div class="row marco-lista">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2 marco-tabla">
          
          <table class="table">
              <thead>
                <tr>
                  <th class="centrado" scope="col">id Repuesto</th>
                  <th  scope="col">N° de Parte</th>
                  <th scope="col">Designación</th>
                  <th scope="col">Aplicación</th>
                  <th class="centrado" scope="col">Ubicación</th>
                  <th  scope="col">Marca</th>
                  <th  scope="col">Modelo</th>
                  <th class="centrado" scope="col">Stock</th>
                  <th class="centrado" scope="col">Editar</th>
                  <th class="centrado" scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              
              <!--Inicio de bucle de extracción de registros de base de datos-->
              <?php if($resultado){
                
                      while($tabla = $nuevaConexion->ObtenerFilas($resultado)){ ?>  
              <tr>
                  <th class="centrado" scope="row"><?php echo $tabla[0]; ?></th>
                  
                  <td><?php echo $tabla[1]; ?></td>
                  <td><?php echo $tabla[2]; ?></td>
                  <td><?php echo $tabla[3]; ?></td>
                  <td class="centrado"><?php echo $tabla[4]; ?></td>
                  <td><?php echo $tabla[5]; ?></td>
                  <td><?php  
                    
                    //impresión de modelos polaris
                    if($tabla[6]==1){echo "S500.4x2|";} 
                    if($tabla[7]==1){echo "S500.4x4|";}
                    if($tabla[8]==1){echo "S570.4x4|";}
                    if($tabla[9]==1){echo "R700.4x4|";}
                    if($tabla[10]==1){echo "R700.6x6|";}
                    if($tabla[11]==1){echo "R900.4x4|";}
                    if($tabla[12]==1){echo "IQ|";}
                    if($tabla[13]==1){echo "LX500|";}
                    if($tabla[14]==1){echo "LX550|";}
                    if($tabla[15]==1){echo "120Pro|";}
                    //impresión de modelos mercury
                    if($tabla[16]==1){echo "25HP|";} 
                    if($tabla[17]==1){echo "40HP.2C|";}
                    if($tabla[18]==1){echo "40HP.3C|";}
                    if($tabla[19]==1){echo "50HP.2C|";}
                    if($tabla[20]==1){echo "50HP.3C|";}
                    if($tabla[21]==1){echo "150HP.6C|";}
                    //impresión de modelos Honda
                    if($tabla[22]==1){echo "U1000|";}
                    if($tabla[23]==1){echo "U2000|";}
                    if($tabla[24]==1){echo "EG6500|";}
                    if($tabla[25]==1){echo "ET12000|";}
                    if($tabla[26]==1){echo "WB20XH|";}
                    if($tabla[27]==1){echo "WB20XT|";}
                  
                  ?></td>
                  <td class="centrado"><?php echo $tabla[28]; ?></td>
                  <td class="centrado"><a href="edicionAlta.php?id=<?php echo $tabla[0]; ?>&pol=<?php echo serialize($P); ?>&mer=<?php echo serialize($M); ?>&hon=<?php echo serialize($H); ?>" target="_SELF">
                  <i class="far fa-edit"></i>
                  </a></td>
                  <td class="centrado"><a href="eliminarAlta.php?id=<?php echo $tabla[0]; ?>&pol=<?php echo serialize($P); ?>&mer=<?php echo serialize($M); ?>&hon=<?php echo serialize($H); ?>" target="_SELF">
                  <i class="far fa-trash-alt"></i>
                  </a></td>
              </tr>
              <?php   }
                    $nuevaConexion->LimpiarResultado($resultado); }?>

              </tbody>
            </table>


          </div>
        </div>
      
    </section>
    <!-- fin de listado de resultados -->