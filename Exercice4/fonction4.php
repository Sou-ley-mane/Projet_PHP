<?php
// Creation de la fonction
function permutation($a,$b){
    echo("La  valeur de a est :\t".$a."\n");
    echo("La  valeur de b est :\t".$b."\n");
    $c=$a;
    $a=$b;
    $b=$c;   
    echo("La nouvelle valeur de a est :\t".$a."\n");
    echo("La nouvelle valeur de b est :\t".$b."\n");
}

?>