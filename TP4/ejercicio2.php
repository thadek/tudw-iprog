<?php

/**
 * Funcion esMultiploDe2 verifica si un numero es par y retorna true o false
 * segun el caso.
 * @param int $num - Numero a verificar.
 * @return boolean - Retorna true si el numero es par, false en caso contrario.
*/
function esMultiploDe2($num){
  $esPar = $num % 2 == 0;
  return $esPar;
}

//Programa principal.
//int $numLeido - Numero leido por teclado.
echo "Ingrese un numero:";
$numLeido = trim (fgets(STDIN));
echo esMultiploDe2($numLeido) ? "El numero ". $numLeido ." es multiplo de 2" : "El numero ". $numLeido ." NO es multiplo de 2";

