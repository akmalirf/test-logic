<?php
// 2. Buatlah fungsi untuk reverse sebuah string
// Apabila input = “abcde”, maka outputnya = “edcba”
// Dilarang menggunakan function reverse, buatlah logika sendiri

function string($string){
  $reverse = "";
  for($i=strlen($string)-1;$i>=0;$i--){
    $reverse .= $string[$i];
  }
  echo $reverse;
}

echo string("abcdsaveasvewgv");
?>
