<?php

// Apabila terdapat sebuah data : 
// array data =  [1,4,7,9,12], 
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput [4,7,9,12]

function filterData($array,$low,$high)
{
  $dataNew = [];
  function countElementInArray($array){
    $count = 0;
    foreach($array as $element){
      $count += 1;
    }
    return $count;
  }

  for($i=0;$i<countElementInArray($array);$i++){
    if($array[$i] >= $low && $array[$i] <= $high){
      $dataNew[] = $array[$i];
    }
  }
  return $dataNew;
}

$data =  [1,4,7,8,9,11,12];

print_r(filterData($data,2,10));

?>