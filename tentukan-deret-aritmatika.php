<?php
function tentukan_deret_aritmatika($arr) {
    // kode di sini
    $selisih = $arr[1]-$arr[0];
    for ($i=1; $i<=count($arr)-1; $i++){
        if($arr[$i]-$arr[$i-1]==$selisih){
            $result = "true";
        }else{
            $result = "false";
        }
    }
    return $result;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>" . tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>" . tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>" . tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>" . tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>