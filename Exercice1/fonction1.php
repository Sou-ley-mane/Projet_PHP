<?php
function Calcul($a){
    // Les opérations
    $surface=$a*$a;
    $perimetre=$a*4;
    $diagonal=sqrt(($a*$a)+($a*$a));
    // Affichages
    echo("la surface est :\t".$surface."\t");
    echo("Le perimètre est :\t" .$perimetre."\t");
    echo("La diagonale est :\t" .$diagonal."\t"); 
}

?>