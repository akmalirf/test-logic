<?php
// 3. Buatlah fungsi untuk menampilkan jumlah digit angka tergantung dimana posisi atau tempat dari angka dalam sebuah string “9.86-A5.321”! 
// Contoh: printDigitValue(‘9.86-A5.321’);
// Hasil :
// 9865321
// 9000000
// 800000
// 60000
// 5000
// 300
// 20
// 1

function printDigitValue($string){
  $number = '';
  for($i=0;$i<strlen($string);$i++){
    if(is_numeric($string[$i])){
      $number .= $string[$i];
    }
  }
  echo $number."<br>";
  for($i=strlen($number);$i>=1;$i--){
    for($a=0;$a<$i;$a++){
      echo $number[-$a];
    }
  echo $i."<br>";
  }
}

echo printDigitValue('9.86-A5.321')
?>