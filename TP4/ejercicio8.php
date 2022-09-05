<?php

/*Una función calcAguaDestilada que recibe por parámetros la cantidad de Loratadina y la cantidad de Betametasona. La función retorna la cantidad de agua. (recuerde que la cantidad de agua destilada es igual a la suma del  10% de la cantidad de Loratadina más el 15% de la cantidad de Betametasona)
b. Un programa principal que solicita la cantidad de Betametasona y la cantidad de Loratadina y, utilizando la función del inciso a), muestra la cantidad de agua necesaria.
*/

/**
 * Calcula la cantidad de agua destilada 
 * @param float $betas Cantidad de betametasona
 * @param float $loras Cantidad de loratadina
 * @return float
 */
function calcAguaDestilada($betas, $loras){
  // float aDestilada
    $aDestilada = (($betas * 15)/100) + (($loras * 10)/100);
    return $aDestilada;
}


//PROGRAMA PRINCIPAL
  // Pide la cantidad de Betametasona y la cantidad de Loratadina y muestra la cantidad de agua necesaria.
  // float $beta, $lora, $agua
  echo "Ingrese la cantidad de Betametasona: ";
  $beta = trim(fgets(STDIN));
  echo "Ingrese la cantidad de Loratadina: ";
  $lora = trim(fgets(STDIN));
  $agua = calcAguaDestilada($beta, $lora);
  echo "La cantidad de agua destilada necesaria es de: $agua";   
// FIN PROGRAMA