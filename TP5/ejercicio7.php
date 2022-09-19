<?php
 
// Este modulo calcula el valor del alquiler
 
function calculoAlquiler ($kilo){
 
    if ($kilo <= 300) {
 
        $salida = 850;
 
    }
 
    if ($kilo > 300 && $kilo <= 1000) {
 
        $salida = 850 + ($kilo - 300) * 10.5;
 
    }
 
    if ($kilo > 1000) {
 
        $salida = 850 + 700 * 10.5 + ($kilo - 1000) * 8.5;
 
    }
    return $salida;
}
 
// Este modulo calcula el impuesto del 21%
function calcularImpuesto ($alquiler){
 
    $salida = ($alquiler * 21) / 100;
    return $salida;
}
 
 
// PROGRAMA AlqAuto
 
// Muestra el monto a pagar en base a los kilómetros recorridos
 
// ENTERO kilometros
// REAL alquiler
 
echo "Ingrese los kilometros recorridos \n";
 
$kilometros = trim(fgets(STDIN));
 
$alquiler = calculoAlquiler($kilometros);
 
echo "El monto a pagar es:". $alquiler. "$, el IVA es: ". calcularImpuesto($alquiler). "$ y el alquiler es: ". ($alquiler - calcularImpuesto($alquiler))."$";