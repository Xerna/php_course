<?php

$basetemp = 32;

$convertToCelsius = function ($temp) {
    global $basetemp;
    return ($temp - $basetemp) * (5 / 9);
};
echo $convertToCelsius(10);

$sentence = 'The quick brown fox jumped over the lazy dog';
function findTheLongesWord($str)
{
    $longestWord = "";
    $words = explode(" ", $str);

    foreach ($words as $word) {
        $longestWord = strlen($longestWord) < strlen($word) ? $word : $longestWord;
    }
    return $longestWord;
}
$longestWord = findTheLongesWord($sentence);
echo $longestWord;
