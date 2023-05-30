<?php

// Buatlah fungsi untuk mengecek tahun kabisat
// input : 2021
// output : 2021 bukan tahun kabisat

// input : 2024
// output : 2024 adalah tahun kabisat

function iskabisat($year)
{
  if($year%4 == 0){
    return $year." "."merupakan tahun kabisat";
  }else if($year%4 != 0){
    return $year." "."bukan merupakan tahun kabisat";
  }
}

echo iskabisat(2021);
?>