<?php

// Buatlah fungsi sebagai berikut :
// int : 4, maka outputnya adalah : empat
// int : 20, maka outputnya adalah : dua puluh
// int : 39, maka outputnya adalah : tiga puluh sembilan
// int : 104, maka outputnya adalah : silahkan masukkan bilangan 1-100



function ubah($int){
  $intsplit = str_split($int);
  switch ($int) {
    case ($int==1):
      echo "hi";
      break;
    case ($int<11):
      echo "hi";
      break;
    case ($int>=10):
      echo "h";
      break;
    case ($int<=100):
      echo "h";
      break;
    default:
      echo "silahkan masukkan bilangan 1-100";
  }
}


echo ubah(200)
?>