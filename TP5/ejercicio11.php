<?php
//Este módulo calcula el discriminante de Bhaskara
function calculoDiscriminante ($a, $b, $c){
 
    $salida = pow ($b, 2) - 4 * $a * $c;
 
    return $salida;
}
 
//PROGRAMA Bhaskara
// El programa calcula la ecuación Bhaskara y muestra los resultados
// REAL a,b,c, disc
 
echo "coeficiente cuadratico:";
$a = trim(fgets(STDIN));
echo "coeficiente lineal:";
$b = trim(fgets(STDIN));
echo "termino independiente:";
$c = trim(fgets(STDIN));
 
$disc = calculoDiscriminante($a, $b, $c);
 
if ($disc == 0) {
 
    echo "Las raices son dobles: X= ". (-1) * $b;
 
}elseif($disc > 0){
 
    echo "X1=". ((-1)* $b + pow($disc,1/2)) / (2* $a). " ";
    echo "X2=". ((-1)* $b - pow($disc,1/2)) / (2* $a);
 
}else{
    echo "No es posible calcular raices Reales.";
}
