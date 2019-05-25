<?php
    function count_vowels($vokal){
        $hasil = 0;
        $arr_kata = str_split($vokal);
        for ($i = 0; $i < count($arr_kata); $i++){
            if ($arr_kata[$i] == 'a' or $arr_kata[$i] == 'i' or $arr_kata[$i] == 'u' or $arr_kata[$i] == 'e' or $arr_kata[$i] == 'o' ){
                $hasil++;
            }            
        }
        return $hasil;
    }


    echo count_vowels('hamimumeio....');

?>