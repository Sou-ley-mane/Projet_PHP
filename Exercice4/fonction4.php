<?php
// les valeurs aléatoires
$a=rand(1,20);
$b=rand(1,30);
// Creation de la fonction
function permutation($a,$b){
    echo("a = ".$a."\n");
    echo("b = ".$b."\n");
    $c=$a;
    $a=$b;
    $b=$c;   
    echo("La nouvelle valeur de a est :\t".$a."\n");
    echo("La nouvelle valeur de b est :\t".$b."\n");
}
permutation($a,$b);


?>