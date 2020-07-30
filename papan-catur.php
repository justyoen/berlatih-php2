<?php

function papan_catur($angka) {
    // tulis kode di sini\
    for($row=1; $row<=$angka; $row++){
        for($col=1; $col<=($angka*2)-1; $col++){
            if($row%2==0 && $col%2==0){
                echo " #&nbsp";
            }else if($row%2==1 && $col%2==1){
                echo " #&nbsp";
            }else{
                echo "&nbsp";
            }
        }
        echo "<br>";
    }

}

// TEST CASES
echo papan_catur(4) . "<br>"; 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8) . "<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) . "<br>";
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>