<?php
function Rectangle(){
// Declaration des variables aléatoires
$l=rand(4,18);
$L=rand(6,20);
// Calcul de la surface
$surface=$l*$L;
echo("La surface est :\t".$surface);
// Calcul du mpérimétre
$perimetre=($l+$L)*2;
echo("Le périmetre est :\t".$perimetre);
// Calcul de la diagonale
$diagonal=sqrt(($l*$l)+($L*$L));
echo("La surface est :\t".$diagonal);
}
// Appel de la fonction
Rectangle();
?>