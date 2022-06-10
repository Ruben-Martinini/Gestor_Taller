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
                  <th scope="col">N° de Parte</th>
                  <th scope="col">Designación</th>
                  <th scope="col">Marca</th>
                  <th class="centrado" scope="col">DP1</th>
                  <th class="centrado" scope="col">DP2</th>
                  <th class="centrado" scope="col">DP3</th>
                  <th class="centrado" scope="col">Cargar repuesto</th>
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
                  <td class="centrado"><?php echo $tabla[5]; ?></td>
                  <td class="centrado"><?php echo $tabla[6]; ?></td>
                  <td class="centrado"><a href="cargas.php?id=<?php echo $tabla[0]; ?>" target="_SELF" >
                  <i class="far fa-edit"></i>
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