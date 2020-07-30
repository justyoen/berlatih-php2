<?php

function pasangan_terbesar($angka){
    // ubah integer ke dalam array
    $arr = str_split($angka);
    // cari nilai max 
    $max = max($arr);
    // masukkan ke dalam var baru
    $pasangan_terbesar = $max;
    // cari index nilai terbesar tsb
    $key = array_search($max, $arr);
    // masukkan nilai pada index setelahnya ke dalam var yg dibuat tadi
    $pasangan_terbesar .= $arr[$key+1];
    return $pasangan_terbesar;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>" . pasangan_terbesar(12783456); // 83
echo "<br>" . pasangan_terbesar(910233); // 91
echo "<br>" . pasangan_terbesar(71856421); // 85
echo "<br>" . pasangan_terbesar(79918293); // 99

?>