<?php
//  1. Buatlah fungsi sebagai berikut :
// 	Apabila terdapat int = 4, maka outputnya 24 (prosesnya : 4*3*2*1)
// 	Apabila terdapat int = 8, maka outputnya 40320 (prosesnya : 8*7*6*5*4*3*2*1) 

  function factorial($int)
  {
    $result = 1;
    $prosess = "";
    for($i=$int;$i>=1;$i--){
      $result *= $i;
      if($i != 1){
        $prosess .=  $i."*";
      }else{
        $prosess .=  $i;
      }
    }
    return "$result (prosesnya : ($prosess))";
  };

  echo factorial(5);

  //result = "120 (prosesnya : (5*4*3*2*1))"
?>

