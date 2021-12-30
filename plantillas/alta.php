<!-- Inicio de listado de resultados -->
<section id="conviertete-en-orador" class="pt-3 pb-3">
      <div class="container">

        <!--Categorias-->
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
        
            
            

         
          </div>
        </div>
        <!--#paquetes-->

        <!--Categorias-->

        <div class="row">
          <div class="col text-uppercase text-center">
          
            <h2>Listado usuarios registrados</h2>
          </div>
        </div>
        <div class="row">
          
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
          
          <!-- Codigo php-->  
            <?php
              $datosTabla = ['num'=> "1" , 'primero'=> "Ruben",'segundo'=>"Oscar",'maneja'=>"@rue"];
            
            
            ?>
          
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">email</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              
              <!--Inicio de bucle de extracción de registros de base de datos-->
              <?php while($tabla=mysqli_fetch_array($consultas)){ ?>  
              <tr>
                  <th scope="row"><?php echo $tabla['id_usuario']; ?></th>
                  <td><?php echo $tabla['nombre']; ?></td>
                  <td><?php echo $tabla['apellido']; ?></td>
                  <td><?php echo $tabla['correo']; ?></td>
                  <td>Editar</td>
                  <td>Eliminar</td>
              </tr>
                <?php } ?>

              </tbody>
            </table>


          </div>
        </div>
      </div>
    </section>
    <!-- fin de listado de resultados -->