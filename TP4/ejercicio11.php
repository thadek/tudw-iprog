<?php

//Ejercicio 11: Encriptación

/**
 * Función que encripta un entero.
 * @param int $num Número a encriptar.
 * @return int Número encriptado.
 */
 function encriptar($num){
  //int dig1,dig2,dig3,dig4,salida
  $dig4 = ($num+7) % 10;
  $dig3 = (int)(($num/10)+7) % 10;
  $dig2 = (int)(($num/100)+7) % 10;
  $dig1 = (int)(($num/1000)+7) % 10;
  $salida = $dig3*1000 + $dig4*100 + $dig1*10 + $dig2;
  return $salida;
 }

/**
 * Función que desencripta un entero.
 * @param int $num Número a desencriptar.
 * @return int Número desencriptado.
 */
function desencriptar($num){
  //int dig1,dig2,dig3,dig4,salida
  $dig4=($num-7)%10;
  $dig3=((int)(($num/10)+10)-7)%10;
  $dig2=((int)(($num/100)+10)-7)%10;
  $dig1=((int)(($num/1000)+10)-7)%10;
  $salida=($dig3*1000)+($dig4*100)+($dig1*10)+$dig2;
  return $salida;
}


//PROGRAMA PRINCIPAL
  //Genera la encriptación y desencriptación de un código de cuatro dígitos.
  //int $num, $encrip, $desencrip
    echo "Ingrese un número de cuatro dígitos: ";
    $num = trim(fgets(STDIN));
    $encrip = encriptar($num);
    echo "El número encriptado es: ".$encrip."\n";
    $desencrip = desencriptar($encrip);
    echo "El número desencriptado es: ".$desencrip."\n";
//FIN PROGRAMA
