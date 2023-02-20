<?php
function sueldo($numH){
    $SalarioBase = 40*4;
    $horaE = $numH-40;
    $salarioExtra = $SalarioBase + ($horaE*6);
    if($numH <= 40){
        return $SalarioBase;
    }elseif($numH > 40){
        return $salarioExtra;
    }
}

echo sueldo(50);

?>