<?php
//fonction Rectanle
function Rectangle($l,$L){
    Surface($l,$L);
    Perimetre($l,$L);
    Diagonal($l,$L);
}
// fonction Surface
function Surface($l,$L){
    $surface=$l*$L;
echo("La surface est :\t".$surface);
}
// fonction Perimetre


function Perimetre($l,$L){
$perimetre=($l+$L)*2;
echo("Le périmetre est :\t".$perimetre);
}

//fonction Diagonal
function Diagonal($l,$L){
$diagonal=sqrt(pow($l,2)+pow($L,2));
echo("La diagonale est :\t".$diagonal);
}

?>