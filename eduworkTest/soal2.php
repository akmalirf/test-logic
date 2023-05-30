<?php
// 2. Buatlah fungsi untuk reverse sebuah string
// Apabila input = “abcde”, maka outputnya = “edcba”
// Dilarang menggunakan function reverse, buatlah logika sendiri

function reverseString($string)
{
  $reversedString = "";
  for($i=strlen($string)-1;$i>=0;$i--){
    $reversedString  .= $string[$i];
  }
  return $reversedString ;
}

echo reverseString("abcde");

// result = "edcba"
?>
