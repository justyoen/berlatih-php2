<?php
function ubah_huruf($string){
    //kode di sini
    $alpha = range('a', 'z');
    $arr = str_split($string);
    // print_r($alpha[5]);
    // print_r($arr);

    $new_str= "";
    for($i=0; $i<=count($arr)-1; $i++){
        $key = array_search($arr[$i], $alpha);
        // print_r($key);
        // print_r($arr[$i]);
        
        if($arr[$i]==$alpha[$key]){
            $new_str .= $alpha[$key+1];
        }
    }
    return $new_str;
}


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>" . ubah_huruf('developer'); // efwfmpqfs
echo "<br>" . ubah_huruf('laravel'); // mbsbwfm
echo "<br>" . ubah_huruf('keren'); // lfsfo
echo "<br>" . ubah_huruf('semangat'); // tfnbohbu

?>