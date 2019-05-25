<?php
function cetak_gambar($ganjil){
    $tengah = $ganjil / 2 + 0.5;
    if ($ganjil % 2 == 1){
        for ($i = 1; $i<= $ganjil; $i++){
            for ($j = 1; $j <= $ganjil; $j++){
                if ($i == 1 or $i == $ganjil or $j == $tengah){
                    echo "x ";
                }else{
                    echo "= ";
                }               
            }
            echo "<br>";
        }
    }else{
        echo "Parameter harus bilangan ganjil";
    }
}

cetak_gambar(9);

?>