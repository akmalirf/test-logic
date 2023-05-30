<?php

// Buatlah fungsi sebagai berikut :
// int : 4, maka outputnya adalah : empat
// int : 20, maka outputnya adalah : dua puluh
// int : 39, maka outputnya adalah : tiga puluh sembilan
// int : 104, maka outputnya adalah : silahkan masukkan bilangan 1-100



function intConvertToWords($number)
{
    if ($number == 0) {
        return "nol";
    }

    $units = [
        1 => "satu",
        2 => "dua",
        3 => "tiga",
        4 => "empat",
        5 => "lima",
        6 => "enam",
        7 => "tujuh",
        8 => "delapan",
        9 => "sembilan",
        10 => "sepuluh",
        11 => "sebelas",
        12 => "dua belas",
        13 => "tiga belas",
        14 => "empat belas",
        15 => "lima belas",
        16 => "enam belas",
        17 => "tujuh belas",
        18 => "delapan belas",
        19 => "sembilan belas"
    ];

    $tens = [
        2 => "dua puluh",
        3 => "tiga puluh",
        4 => "empat puluh",
        5 => "lima puluh",
        6 => "enam puluh",
        7 => "tujuh puluh",
        8 => "delapan puluh",
        9 => "sembilan puluh"
    ];

    if ($number >= 1 && $number <= 19) {
        return $units[$number];
    } elseif ($number >= 20 && $number <= 99) {
        $tensDigit = floor($number / 10);
        $onesDigit = $number % 10;

        if ($onesDigit == 0) {
            return $tens[$tensDigit];
        } else {
            return $tens[$tensDigit] . " " . $units[$onesDigit];
        }
    } elseif ($number >= 100 && $number <= 100) {
        return "silahkan masukkan bilangan 1-100";
    } else {
        return "silahkan masukkan bilangan 1-100";
    }
}

echo intConvertToWords(44);

// result = empat puluh empat
