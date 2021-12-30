

function validar() {
    //obtengo los valores de los campos del formulario
      
    var usuL = document.getElementById('inputUsuario').value
    var claL = document.getElementById('inputClave').value
   
    
      //Compruebo con condicional de que no haya campos vacíos excepto el de tel.
    if (usuL == "" || claL == "" ) {
        alert("¡Por favor, complete todos los campos requeridos!")
          return false;
    }
      return true;  
  }