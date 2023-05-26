<?php 
    $name = "huda";
    $len = strlen($name);
    if ($len == date('d')-2){
        echo "berhasil";
    } else if ($len < date('d')){
        echo "sedikit lagi";
    } else {
        echo $len;
        echo "coba lagi";
    }
?>