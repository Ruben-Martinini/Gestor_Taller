function establecerTipoOperacion(){

    var tipo = document.getElementsByName('radioTipoMov');
    var desde = document.getElementById('desde'); 
    var hacia = document.getElementById('hacia');
    var canT = document.getElementById('cantT');
    var depo = document.getElementById('depo');
    var canD = document.getElementById('canD');

    for(let i=0; i<tipo.length ; i++){
        if(tipo[i].checked){
            switch (tipo[i].value){
                case "Transferir":
                    
                      desde.style.display = 'block'; 
                      hacia.style.display = 'block';
                      canT.style.display = 'block'; 
                      depo.style.display = 'none';
                      canD.style.display = 'none'; 
                       
                    
                break;
                case "Descargar":
                    
                    desde.style.display = 'none'; 
                    hacia.style.display = 'none';
                    canT.style.display = 'none'; 
                    depo.style.display = 'block';
                    canD.style.display = 'block'; 
                     
                       
                    
                break;
                
            }
        }
    }
    


}

function controlEleccion(){
    var tipo = document.getElementsByName('radioTipoMov');
    var desde = document.getElementsByName('radioDesde');  
    var hacia = document.getElementsByName('radioHacia');
    var de = document.getElementsByName('radioDescarga');
    var textCantT = document.getElementById('inputCantidadT').value;
    var textCantD = document.getElementById('inputCantidadD').value;
    var cantDp1 = document.getElementById('inputStdp1').value;
    var cantDp2 = document.getElementById('inputStdp2').value;
    var cantDp3 = document.getElementById('inputStdp3').value;
    
    for(let i=0; i<tipo.length ; i++){

        if(tipo[i].checked){
            switch (tipo[i].value){

                case "Transferir":

                    console.log("transferir");
                    
                        for(let a=0; a<desde.length ; a++){
                            
                            if(desde[a].checked){
                                var depDesde=desde[a].value;
                            }
                            if(hacia[a].checked){
                                var depHacia=hacia[a].value;
                            }
                            
                            if(desde[a].checked && hacia[a].checked  ){ 

                                alert("¡Por favor, establezca un Depósito de destino distino!");
                                return false;
                                
                            }                       
                        } 
                        //control de cantidad a transferir contra stock
                                switch(depDesde){

                                case "dp1":
                                    
                                    if(Number(cantDp1) >= textCantT && textCantT > 0){
                                        let resultado = confirm("¿Está seguro de TRANSFERIR del " + depDesde +" al " + depHacia + " la cantidad de " + textCantT + " unidad/es?");
                        
                                        if (resultado === false) {
                                            return false;
                                            } 
                                        return true;
                                    }else{
                                        
                                        alert("¡la CANTIDAD seleccionada no es acorde a la del stock del " + depDesde + "!");
                                        
                                        return false; 
                                    }

                                break;

                                case "dp2":
                                    
                                    if(Number(cantDp2) >= textCantT && textCantT > 0){
                                        let resultado = confirm("¿Está seguro de TRANSFERIR del " + depDesde +" al " + depHacia + " la cantidad de " + textCantT + " unidad/es?");
                        
                                        if (resultado === false) {
                                            return false;
                                            } 
                                        return true;
                                    }else{
                                        
                                        alert("¡la CANTIDAD seleccionada no es acorde a la del stock del " + depDesde + "!");
                                        
                                        return false; 
                                    }

                                break; 

                                case "dp3":

                                    if(Number(cantDp3) >= textCantT && textCantT > 0){
                                        let resultado = confirm("¿Está seguro de TRANSFERIR del " + depDesde +" al " + depHacia + " la cantidad de " + textCantT + " unidad/es?");
                        
                                        if (resultado === false) {
                                            return false;
                                            } 
                                        return true;
                                    }else{
                                        
                                        alert("¡la CANTIDAD seleccionada no es acorde a la del stock del " + depDesde + "!");
                                        
                                        return false; 
                                    }

                                break;  
                                }        
                            
                        
                        
                        
                        return true; 
                         
                break;
                
                case "Descargar":
                        
                    
                        console.log("descargar");
                        
                        for(let j=0; j<de.length ; j++){
                            if(de[j].checked){

                                switch(de[j].value){

                                case "dp1":
                                    console.log("dp1");
                                    if(Number(cantDp1) >= textCantD && textCantD > 0){
                                        let resultado = confirm("¿Está seguro de descargar del " + de[j].value + " la cantidad de " + textCantD + " unidad/es?");
                    
                                            if (resultado === false) {
                                               return false;
                                            } 
                                        return true;
                                    }else{
                                        
                                        alert("¡la CANTIDAD seleccionada no es acorde a la del stock del " + de[j].value + "!");
                                        
                                        return false; 
                                    }

                                break;

                                case "dp2":
                                    //console.log("dp2");
                                    if(Number(cantDp2) >= textCantD  && textCantD > 0){
                                        let resultado = confirm("¿Está seguro de descargar del " + de[j].value + " la cantidad de " + textCantD + " unidad/es?");
                                        if (resultado === false) {
                                           return false;
                                        } 
                                        return true;
                                    }else{
                                        
                                        alert("¡la CANTIDAD seleccionada no es acorde a la del stock del " + de[j].value + "!");
                                        
                                        return false; 
                                    }

                                break; 

                                case "dp3":
                                    //console.log("dp3");
                                    if(Number(cantDp3) >= textCantD  && textCantD > 0){
                                        let resultado = confirm("¿Está seguro de descargar del " + de[j].value + " la cantidad de " + textCantD + " unidad/es?");
                                        if (resultado === false) {
                                           return false;
                                        } 
                                        return true;
                                    }else{
                                        
                                        alert("¡la CANTIDAD seleccionada no es acorde a la del stock del " + de[j].value + "!");
                                        
                                        return false; 
                                    }

                                break;  
                                }        
                            }
                        }

        
                break;
                
            }
        }
    }

}