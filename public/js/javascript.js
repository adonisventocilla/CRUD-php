function crearInvestigador(){
         
    var padre = document.getElementById("masInves");
    var input = document.createElement("input");         
    input.type = 'text';
    input.className = 'form-control form-control-lg';
    padre.appendChild(input);
 } 

 function crearObjetivo(){
         
   var padre = document.getElementById("masObj");
   var input = document.createElement("input");         
   input.type = 'text';
   input.className = 'form-control form-control-lg';
   padre.appendChild(input);
} 
 
 window.onload = function(){
    
    var btnAddI = document.getElementById("btn_agregarI");   
    var btnAddO = document.getElementById("btn_agregarO");
    btnAddI.onclick = crearInvestigador;
    btnAddO.onclick = crearObjetivo;
 }  