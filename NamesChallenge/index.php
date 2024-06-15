<?php
$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];
//Solution 1
// foreach ($names as $name) {
//     if ($name[0] == "A") {
//         continue;
//     } else {
//         $name = strtolower(strrev($name));
//         echo $name . "</br>";;
//     }
// }
//Solution 2
$nameReverse = "";
foreach ($names as $name) {
    if ($name[0]  == "A") {
        continue;
    } else {
        // $i = strlen($name) - 1;
        // echo $i . "/<br>";
        for ($i = strlen($name) - 1; $i >= 0; $i--) {
            // echo $i;
            $nameReverse .= strtolower($name[$i]);
        }
        echo $nameReverse . "</br>";
        $nameReverse = "";
    }
}
