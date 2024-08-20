<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string)
{

    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
    return $vowelCount;

}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);

    $strReverse = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $strReverse \n";
}