 <!-- inicio  de main-->
 <section class="container-padre" style="background-image: url('Imgs/manipulador.jpg');">
        <div class="cuad filter" >
                <form action="checklogin.php" onsubmit="return validar()" method="POST">
                    <div>
                    <h5 style="color: black;">Acceso Sistema de Gestión del Taller</h5>
                    </div>
                    <div class="row mb-3 row-ingreso">
                    
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputUsuario" name="usuario" placeholder="Usuario" require>
                    </div>
                    </div>
                    <div class="row mb-3 row-ingreso">
                    
                    <div class="col-sm-12"> 
                        <input type="password" class="form-control" id="inputClave" name="clave" placeholder="Contraseña"require>
                    </div>
                    </div>
                    
                    <div class="row mb-3 row-ingreso">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1" style="color: rgb(7, 2, 2);">
                            Recuérdame
                        </label>
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
        </div>
    </section>
    
    <!-- fin  de main-->