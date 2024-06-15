<?php
//SI EL VALOR QUE ESTA A LA IZQUIERDA DEL OPERADOR "??" PASARA A TOMAR EL VALOR DE LA DERECHA
$color = "red";
$color2 = null;
echo $color . "</br>";
echo $color2 ?? $color;
