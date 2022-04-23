function establecerMarca(){

    var marca = document.getElementsByName('bgrMarca');
    var modPol = document.querySelector('#ModelosPolaris'); 
    var modMer = document.getElementById("ModelosMercury");
    var modHon = document.getElementById("ModelosHonda");

    for(let i=0; i<marca.length ; i++){
        if(marca[i].checked){
            switch (marca[i].value){
                case "Polaris":
                      modPol.style.display = 'flex'; 
                      modMer.style.display = 'none';
                      modHon.style.display = 'none';  
                    
                break;
                case "Mercury":
                    modPol.style.display = 'none'; 
                    modMer.style.display = 'flex';
                    modHon.style.display = 'none';   
                    
                break;
                case "Honda":
                    modPol.style.display = 'none'; 
                    modMer.style.display = 'none';
                    modHon.style.display = 'flex'; 
                    
                break;
            }
        }
    }
    


}

function cargaModelos(){
    var marca=document.getElementsByName('bgrMarca');
    
    var textMarca = document.getElementById('inputMarca');
    var textMarMo = document.getElementById("inputModelo");
    var ModelosPolaris = document.getElementsByClassName("check-Polaris");
    var ModelosMercury = document.getElementsByClassName("check-Mercury");
    var ModelosHonda = document.getElementsByClassName("check-Honda");

    for(let i=0; i<marca.length ; i++){
        if(marca[i].checked){

            switch (marca[i].value){

                case "Polaris":

                    textMarMo.value = "";
                    for(let i=0; i<ModelosPolaris.length ; i++){
                        
                         if (ModelosPolaris[i].checked) {                      
                            textMarMo.value += ModelosPolaris[i].value + " "; 
                            
                        }   
                    }    
                    textMarca.value = "Polaris";
                break;

                case "Mercury":

                    textMarMo.value = "";
                    for(let i=0; i<ModelosMercury.length ; i++){
                        
                         if (ModelosMercury[i].checked) {                      
                            textMarMo.value += ModelosMercury[i].value + " ";                      
                        }   
                    }  
                    textMarca.value = "Mercury";
                break;
                case "Honda":

                    textMarMo.value = "";
                    for(let i=0; i<ModelosHonda.length ; i++){
                        
                         if (ModelosHonda[i].checked) {                      
                            textMarMo.value += ModelosHonda[i].value + " ";                      
                        }   
                    }  
                    textMarca.value = "Honda";                    
                break;
            }
        }
    }
     
}



function validarB() {
    //obtengo los valores de los campos del formulario de alta
      
    var inMod = document.getElementById('inputModelo').value
    var inPart = document.getElementById('inputNparte').value
    var inDes = document.getElementById('inputDesignacion').value
    var inApl = document.getElementById('inputAplicacion').value
    var inUbc = document.getElementById('inputUbicacion').value
    
    
   
    
      //Compruebo con condicional de que no haya campos vacíos excepto el de tel.
    if (inMod == "" && inPart == "" && inDes == "" && inApl == "" && inUbc == "") {
        alert("¡Por favor, complete el campo del criterio de búsqueda elegido!")
          return false;
    }
      return true;  
  }