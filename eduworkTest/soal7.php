<?php

// Dari soal nomor 6, buatlah juga untuk menghasilkan output total ada berapa angka yg termasuk dari bagian low dan high
// array data =  [1,4,7,9,12], 
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput = 4

function countFilterData($array,$low,$high)
{
  $count = 0;
  foreach($array as $element){
    if ($element >= $low && $element <= $high){
      $count += 1;
    }
  }
  return $count;
}

$data =  [1,4,7,9,8,12];

echo countFilterData($data,2,10);

?>
