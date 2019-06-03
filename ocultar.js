/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
     function desactivar(name,nombreBotones){
	var partesBotones = nombreBotones.split(",");
	for(i=0;i<partesBotones.length;i++){
		var boton = document.getElementById(partesBotones[i]);
		if(boton.name === name)boton.disabled = false;
		else boton.disabled = true;
	}
       
}
window.onload="desactivar(this.name,'modificar,agregar,boton3')";