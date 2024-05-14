<?php
$strings = ["Hello", "World", "PHP", "Programming"];

for ($i = 0; $i < count($strings); $i++) {
    $string = $strings[$i];
 
    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);
   
    $reversedString = strrev($string);
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
}



 ?>
