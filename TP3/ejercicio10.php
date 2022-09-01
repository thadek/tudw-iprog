<?php
//PROGRAMA Encriptar
// Encriptar números según condiciones.
//int $num, $dig1,$dig2,$dig3,$dig4, $salida
echo "Ingrese un numero de 4 dígitos:";
$num = trim (fgets(STDIN));
$dig4 = ($num + 7) % 10;
$dig3 = ((int)($num/10) + 7) % 10;
$dig2 = ((int)($num/100) + 7) % 10;
$dig1 = ((int)($num/1000) + 7) % 10;
$salida = ($dig3*1000) +($dig4*100)+ ($dig1*10)+ $dig2;
echo "Nro encriptado: ". $salida;
