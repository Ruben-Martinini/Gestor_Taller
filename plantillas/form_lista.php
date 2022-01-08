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
                  <th scope="col">id Repuesto</th>
                  <th scope="col">N° de Parte</th>
                  <th scope="col">Designación</th>
                  <th scope="col">Aplicación</th>
                  <th scope="col">Ubicación</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              
              <!--Inicio de bucle de extracción de registros de base de datos-->
              <?php foreach($fila as $tabla){ ?>  
              <tr>
                  <th scope="row"><?php echo $tabla['id_repuesto']; ?></th>
                  
                  <td><?php echo $tabla['nro_parte']; ?></td>
                  <td><?php echo $tabla['designacion']; ?></td>
                  <td><?php echo $tabla['aplicacion']; ?></td>
                  <td><?php echo $tabla['ubicacion']; ?></td>
                  <td><?php echo $tabla['marca']; ?></td>
                  <td><?php echo $tabla['cantidad']; ?></td>
                  <td>
                  <i class="fa-solid fa-user"></i>
                  </td>
                  <td>Eliminar</td>
              </tr>
              <?php } ?>

              </tbody>
            </table>


          </div>
        </div>
      
    </section>
    <!-- fin de listado de resultados -->