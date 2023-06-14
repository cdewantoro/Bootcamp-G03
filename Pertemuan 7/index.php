<!-- Array -->

<?php

    // Array
    // sebuah tipe data yang mampu menampung banyak value
    // index array dimulai dari nol 


    $datas = ["Rissa Nussy", 17, 'nonton', true];

    var_dump($datas);

    echo $datas[0];
    echo "<br>";
    echo $datas[1];
    echo "<br>";

    for($i=0;i< count($datas);$i++) {
        echo $datas[i];
        echo "<br>";
    }

    // for untuk menangani array

    foreach($datas as $data){
        echo $data;
        echo "<br>";
    }



?>