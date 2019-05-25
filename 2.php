<?php
    function betweenDays($tgl1,$tgl2){
        $satu = explode('-',$tgl1);
        $dua = explode('-',$tgl2);
        $satu1 = intval($satu[2]);
        $dua2 = intval($dua[2]);
    
        for ($i = $satu1; $i <= $dua2; $i++){
            echo "' $satu[0]-$satu[1]-0",$i," ' , ";
        }
    }

    betweenDays('2019-11-01','2019-11-10');

?>