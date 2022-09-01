<?php
//PROGRAMA Desencriptar
// Desencriptar números según condiciones.
//int $num,$dig1,$dig2,$dig3,$dig4,$salida
echo "Ingrese un numero de 4 dígitos:";
$num = trim (fgets(STDIN));

$dig4 = ($num - 7) % 10;
$dig3 = (((int)($num/10) +10) - 7) % 10;
$dig2 = (((int)($num/100) +10) - 7) % 10;
$dig1 = (((int)($num/1000) +10) - 7) % 10;
//Intercambio los numeros y los unifico en salida.
$salida = ($dig3*1000) +($dig4*100)+ ($dig1*10)+ $dig2;
/*$salida = $dig3. $dig4. $dig1. $dig2;
$salida = intval($salida);*/
echo "Nro desencriptado: ". $salida;



