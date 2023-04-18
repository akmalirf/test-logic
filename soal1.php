<?php
//  1. Buatlah fungsi sebagai berikut :
// 	Apabila terdapat int = 4, maka outputnya 24 (prosesnya : 4*3*2*1)
// 	Apabila terdapat int = 8, maka outputnya 40320 (prosesnya : 8*7*6*5*4*3*2*1) 

  function int($int){
    $fact = 1;
    for($i=$int;$i>=1;$i--){
      $fact = $fact * $i;
      // proses
      // if($i != 1){
      //   echo  $i."*";
      // }else{
      //   echo $i;
      // }
    }
    echo $fact;
  };

  echo int(5);

?>

