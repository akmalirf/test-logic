<?php

// Dari soal nomor 6, buatlah juga untuk menghasilkan output total ada berapa angka yg termasuk dari bagian low dan high
// array data =  [1,4,7,9,12], 
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput = 4

function data($array,$low,$high){
  $dataNew = [];
  for($i=0;$i<count($array);$i++){
    if($array[$i]>$low && $array[$i] <$high){
      array_push($dataNew,$array[$i]);
    }
  }
  return array_sum($dataNew);
}

$data =  [1,4,7,9,12];

print_r(data($data,2,10));

?>
