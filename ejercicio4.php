<?php
$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    echo "ingrese el entero" . $i . ": ";
    $numer = (int) fgets(STDIN);
    $suma += ($numer % 3 == 0) ? $numer : 0;

}
 echo "la suma total de los numeros de multiplos de 3 es" , $suma . "\n";

?>