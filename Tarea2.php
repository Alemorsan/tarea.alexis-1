<?php

function propinas($cuenta, $calidad){

    $PROPINA1 = 0.20;
    $PROPINA2 = 0.10;
    $PROPINA3 = 0.05;
    $PROPINA4 = 0;
    echo "<br/>";

    if($calidad == "Excelente"){
        echo "total de cuenta : $".$cuenta;
        echo "<br/>";
        echo "su calidad es {$calidad} <br/>";
        echo "propina es del :".number_format($PROPINA1*100)."% ";
        echo "<br/>";
        echo "Total: $". floatval( $cuenta+($PROPINA1*$cuenta));
    }elseif($calidad == "Bueno"){
        echo "total de cuenta : $".$cuenta;
        echo "<br/>";
        echo "su calidad es {$calidad} <br/>";
        echo "propina es del :".number_format($PROPINA2*100)."% ";
        echo "<br/>";
        echo "Total: $". floatval( $cuenta+($PROPINA2*$cuenta));
    }elseif($calidad == "Regular"){
        echo "total de cuenta : $".$cuenta;
        echo "<br/>";
        echo "su calidad es {$calidad} <br/>";
        echo "propina es del :".number_format($PROPINA3*100)."% ";
        echo "<br/>";
        echo "Total: $". floatval( $cuenta);
    }

}


?>