<?php
$n = readline("ingrese el numero de ventas: ");
$ventas_menor_igual_400 = 0;
$ventas_entre_400y_800 = 0;
$ventas_mayor_igual_800 = 0;

for ($i = 0; $i < $n; $i++){
    $venta = readline("ingresar el valor de la venta " . ($i+1) . ": ");
    if ($ventas <= 400){
        $ventas_menor_igual_400++;
    }elseif ($ventas < 800){
        $ventas_entre_400y_800++;
    } else{
        $ventas_mayor_igual_800++;
    }
}
 echo "ventas de $400 o menos: $ventas_menor_igual_400\n";
 echo "ventas mayor a $400 pero inferior a $800 $ventas_entre_400y_800\n";
 echo "ventas de $800 o mas $ventas_mayor_igual_800\n";
 
?>