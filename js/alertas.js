function alertEliminar(){
     let confirmacion=  confirm("¿Está seguro de eliminar el repuesto de la base de datos?"); 
        if(confirmacion){
            return true;
        }else{
            return false;
        }
    
}
