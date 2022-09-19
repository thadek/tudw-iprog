<?php
/**
 * Este modulo recibe un string con el nombre del mes en minusculas
 * y retorna el factor de productividad del mismo
 * @param string $nombreMes
 * @return int
 */
function handlerProductividad($nombreMes){
//int $factorRetorno
$factorRetorno = 0;
if($nombreMes=="enero" || $nombreMes=="febrero" || $nombreMes=="marzo"){
  $factorRetorno=15;
}elseif($nombreMes=="abril" || $nombreMes=="mayo" || $nombreMes=="junio"){
  $factorRetorno=17;
}elseif($nombreMes=="julio" || $nombreMes=="agosto"){
  $factorRetorno=19;
}elseif($nombreMes=="septiembre" || $nombreMes=="octubre" || $nombreMes=="noviembre"){
  $factorRetorno=20;
}else{
  $factorRetorno=21;
}
return $factorRetorno;
}



//Programa CalcularProductividad
//Este programa calcula la productividad mensual
// int artProd,prodCalculada
// string mesProd
$artProd=0;
$prodCalculada=0;
$mesProd;
echo "Ingrese la cantidad de articulos producidos\n";
$artProd=trim(fgets(STDIN));
echo "Ingrese el mes a evaluar EN MINUSCULA\n";
$mesProd=trim(fgets(STDIN));
$prodCalculada=handlerProductividad($mesProd)*$artProd;
echo "La productividad para el mes ".$mesProd." es de ".$prodCalculada.".";
//FIN PROGRAMA