<?php
 
//Este módulo calcula el IMC en base a la masa y altura
 
function calculoIMC($masa, $altura){
 
    $salida = $masa / pow($altura,2);
 
    return $salida;
}
 
//Este módulo clasifica la altura en base a la OMS, dependiendo del IMC
 
function clasificacionOMS ($IMC){
 
    if ($IMC < 18.5) {
 
        $salida = "Bajo peso";
 
    } elseif ($IMC < 24.99) {
 
        $salida = "Peso Normal";
 
    } elseif ($IMC < 29.99) {
 
        $salida = "Sobrepeso";
 
    } elseif ($IMC < 34.99) {
 
        $salida = "Obesidad leve";
 
    } elseif ($IMC < 39.99){
 
        $salida = "Obesidad media";
 
    } elseif ($IMC >= 40 ){
 
        $salida = "Obesidad morbida";
 
    } else {
        $salida = "valor no valido";
    }
    return $salida;
}
 
//PROGRAMA EstadoNutricional
 
//Este programa muestra el estado nutricional según el peso y altura ingresados
 
//REAL peso, estatura, IMC
 
echo "Ingrese su altura: \n";
$estatura = trim(fgets(STDIN));
echo "Ingrese su peso: \n";
$peso = trim(fgets(STDIN));
 
$IMC = calculoIMC($peso, $estatura);
 
echo "Usted posee:". clasificacionOMS($IMC);
