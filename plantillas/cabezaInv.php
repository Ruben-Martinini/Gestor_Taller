<!--Inicio de Nav--> 
<section class="cabeza-nav">
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" id="encabezado">
          <div class="container-fluid">

            <a class="navbar-brand texto-operacion" href="#">
              <img src="Imgs/DAN-IAA_logo.png" alt=" logo DNA IAA">
              Taller DNA - <?php echo $operacion ?> 
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Operaciones
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="busquedaInv.php">Buscar Repuestos</a></li>
                      <li><a class="dropdown-item" href="#">Alta Repuestos</a></li>
                      <li><a class="dropdown-item" href="#">Baja Repuestos</a></li>
                  </ul>
              </li>
                
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active azul" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <!-- <div class='imgRedonda'></div>
                  <img src='' class='imgRedonda' /> 
                  -->

                  <?php echo $_SESSION['usuario'] ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="nav-link active " href="logout.php" target="_self">Salir</a></li>
                      
                  </ul>
              </li>
              
                
              </ul>
            
          </div>
        </div>
      </nav> 
    
    </section>
<!--fin de Nav-->