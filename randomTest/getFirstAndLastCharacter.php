<?php

function getFisrtCharacter($string){
  $fisrtCharacter = $string[0];
  return $fisrtCharacter;
}

function getLastCharacter($string){
  $lastCharacter = $string[-1];
  return $lastCharacter;
}

$testSentence = "scbocqobc219uwj&";

echo "from ". $testSentence;
echo "<hr>";
echo "the first character is ". getFisrtCharacter($testSentence);
echo "<br>";
echo "the last character is ". getLastCharacter($testSentence);

?>