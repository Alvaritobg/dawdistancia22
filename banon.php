<?php
/**
*Funcion para realizar sumas ACTUALIZADO!!!
*@author Alvaro BG
*@version 1.0
*@param integer $sum1 primer numero a sumar
*@param integer $sum2 segundo numero a sumar
*@return integer Resultado de la suma de dos numeros
*{@internal Este texto solo lo veran los desarrolladores}
*/
function sumar($sum1, $sum2){
	$resultado = $sum1 + $sum2;
	return $resultado;
}

$suma = sumar(20,7);
echo $suma;

/**
*Funcion para escribir un texto cualquiera
*@author Alvaro BG
*@version 3.0
*@param string $texto texto a mostrar
*@return string Devuelve el texto introducido
*{@internal Este texto solo lo veran los desarrolladores}
*/

function mostrarTexto($texto) {
	return $texto;
}

$texto_mostrar = mostrarTexto("Hola, me llamo Álvaro.");
echo $texto_mostrar;
?>
