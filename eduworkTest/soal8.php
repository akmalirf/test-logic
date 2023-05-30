<?php

// Apabila terdapat int = 15, maka akan mencetak output berikut :
// 1
// 2
// Edu
// 4
// Work
// Edu
// 7
// 8
// Edu
// Work
// 11
// Edu
// 13
// 14
// EduWork

// keterangan : string edu untuk kelipatan 3, string work untuk kelipatan 5, string eduwork untuk kelipatan 3 dan 5

function eduwork($int)
{
  for($i=1;$i<=$int;$i++){
    $sisaBagi3 = $i % 3;
    $sisaBagi5 = $i % 5;
    if($sisaBagi3 == 0 && $sisaBagi5 != 0){
      echo "Edu";
    }else if($sisaBagi5 == 0 && $sisaBagi3 != 0 ){
      echo "Work";
    }else if($sisaBagi3 == 0 && $sisaBagi5 == 0){
      echo "EduWork";
    }else{
      echo $i;
    }
     
    echo "<br>";
  }
}

echo eduwork(15);

?>