<?php

$array  = [8, 5, 1, 3, 7, 10];
$dict   = [];

$target = 9;

/*
=========================================================
1. Cek apakah key index $dict nomor $num ada.
2. Jika ada, tampilkan $num dan $dict[$num] sebagai pair.
3. Jika tidak ada, maka simpan angkanya di $dict.
4. Cek untuk seluruh angka di $array.
=========================================================
*/

foreach ($array as $num) {
  if (array_key_exists($num, $dict)) {
    print $num . ', ' . $dict[$num];
  } else {
    $dict[$target - $num] = $num;
  }
}
