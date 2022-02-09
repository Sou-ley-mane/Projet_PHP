<?php
function Calcul(){
    // Declaration des variables aléatoires
    $a=rand(3,13);
    // Les opérations
    $surface=$a*$a;
    $perimetre=$a*4;
    $diagonal=sqrt(($a*$a)+($a*$a));
    // Affichages
    echo("la surface est :\t".$surface);
    echo("Le perimètre est :\t" .$perimetre);
    echo("La diagonale est :\t" .$diagonal); 
}
Calcul();
?>