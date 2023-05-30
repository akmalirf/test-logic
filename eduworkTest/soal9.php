<?php

// Buatlah fungsi untuk menentukan bilangan terkecil dan terbesar dari sebuah arrayay
// Contoh : array [4,2,6,88,3,11]
// Maka outputnya adalah low : 2, high : 88
// dilarang menggunakan built in function

function getMaxAndMin($array)
{
  $max = $array[0];
  $min = $array[0];

  function countElementInArray($array)
  {
    $count = 0;
    foreach($array as $element){
      $count += 1;
    }
    return $count;
  }

  for($i=0;$i<countElementInArray($array);$i++){
    if($max < $array[$i]){
        $max = $array[$i];
    }
    if($min > $array[$i]) {
        $min = $array[$i];
    }
  }

  return 'max = '.$max.' , '.'min = '.$min;
}

$data = [4,2,6,88,3,11];
echo getMaxAndMin($data);
