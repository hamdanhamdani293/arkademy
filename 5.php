<?php
    function ganti_kata($kata,$lama,$baru){
        $arr_kata = str_split($kata);
        for ($i = 0; $i < count($arr_kata); $i++){
            if ($arr_kata[$i] == $lama){
                $arr_kata[$i] = $baru;
            }
            echo "$arr_kata[$i] ";
        }
    }

    ganti_kata('purwakarta','a','o');

?>