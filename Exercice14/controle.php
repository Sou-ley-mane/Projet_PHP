<?php
function supCararctere($str){
    $str=preg_replace("/\D/"," ",$str);
    return $str;
}

function separation(string $str):array{
    $Tab=preg_split("/\s{1,}/",$str);
    return $Tab;
}

// Numeros invalide
function nonValide(){
    
}

//TEST
$str="ERFHHDHHH344556666$$$$$$$   @@@@@ 33244553";
$a=supCararctere($str);
$b=separation($a);
print_r($b);
?>