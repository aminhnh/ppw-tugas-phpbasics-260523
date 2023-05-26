<?php
    $anggota = array(
        "Salwa Jasmine A'aliyah"=>11111, 
        "Risma Saputri" => 22222, 
        "Amanda Farliana Setyasari" => 333333,
        "Aminah Nurul Huda" => 44444,
        "Ryvalino Dhanu Ekaputra" => 55552);

    foreach($anggota as $nama => $nim){
        echo "Nama : $nama";
        echo "<br>";
        echo "NIM : $nim";
        echo "<br>";
        if ($nim % 2 == 0){
            echo "Peran : Back-end developer <br>";
        } else{
            echo "Peran : Front-end developer <br>";
        }
        echo "<br><br>";
    }
?>