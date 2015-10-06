
/***********************************************************/
/*              Funciones de Canvas.js                     */
/*    Contiene el codigo javascript de la animacion        */                         
/*           canvas del sitio web PetsFriends              */
/*                                                         */
/***********************************************************/

var velocidad = 0.2; /* Velocidad y sentido de la ola  */
var altoOla = 50; /* Altura de la ola */
var anchoOla = 0; /* Ancho de la ola */

var myAarray = new Array; /* Almacena cada paso de la animacion */  
           		 
/* Aqui pintamos el canvas en cada iteracion */
function pintarCanvas() { 
	var contador = 0;
	var posicion = 0;

var incrementoOla = Math.PI /90 + anchoOla; /* Curvatura de la ola */

/* Tamaño del contenedor canvas */
var canvas = document.getElementById("canvas")
	canvas.width = document.getElementById("bottom_block").clientWidth;
	canvas.height = document.getElementById("bottom_block").clientHeight-20;
	
	for (i = 0; i <= canvas.width; i++) {
		y = Math.sin(contador + velocidad);
		contador += incrementoOla;
		var fin = 150 + y * altoOla; //Obtiene el final de la linea a pintar

		//Entra la primera vez para iniciar el canvas
		if (myAarray[i] == undefined || myAarray[i] == '' ) {
			myAarray[i] = canvas.getContext('2d');
		}
		
		//Pinta el canvas						
		myAarray[i].beginPath();
		myAarray[i].lineWidth="5";
		myAarray[i].strokeStyle="white";
		myAarray[i].moveTo(0+posicion,0);
		myAarray[i].lineTo(posicion,fin);
		myAarray[i].stroke();
		posicion += 5;
	}

	velocidad += 0.1;

}
setInterval('pintarCanvas()',50);
