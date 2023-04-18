<?php

// Buatlah fungsi untuk menentukan bilangan terkecil dan terbesar dari sebuah array
// Contoh : array [4,2,6,88,3,11]
// Maka outputnya adalah low : 2, high : 88
// dilarang menggunakan built in function

function data($arr){
  $max = $arr[0];
  $min = $arr[0];
  $n = count($arr);
  for($i=0;$i<$n;$i++) {
  if($max < $arr[$i]) {
      $max = $arr[$i];
  }
  if($min > $arr[$i]) {
      $min = $arr[$i];
  }
  }
  echo 'max = '.$max.','.'min = '.$min;
}

$a = [4,2,6,88,3,11];
echo data($a);
?>
