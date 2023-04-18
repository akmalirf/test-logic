<?php

// Apabila terdapat sebuah data : 
// array data =  [1,4,7,9,12], 
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput [4,7,9,12]

function data($array,$low,$high){
  $dataNew = [];
  for($i=0;$i<count($array);$i++){
    if($array[$i]>$low && $array[$i] <$high){
      array_push($dataNew,$array[$i]);
    }
  }
  return $dataNew;
}

$data =  [1,4,7,9,12];

print_r(data($data,2,10));

?>