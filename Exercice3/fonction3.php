<?php
// Les variables en globale
  $a=rand(2,10);
  $b=rand(3,30);
//   Creation de la fonction "operation"
function operation($a,$b){
    $som=$a+$b;
    $dif=$a-$b;
    $pro=$a*$b;
    $mod=$a%$b;
    $div=$a/$b;
    $expo=expm1($a);
    $exp1=expm1($b);
    $car1=$a*$a;
    // Affichage des resultats
    echo("La somme est : \t".$som."\n");
    echo("La difference est : \t".$dif."\n");
    echo("Le produit est : \t".$pro."\n");
    echo("Le modulo est : \t".$mod."\n");
    echo("La division est : \t".$div."\n");
    echo("L'exponentiel de $a est : \t".$expo."\n");
    echo("L'exponentiel de $b est : \t".$exp1."\n");
    echo("Le carré de $a est : \t".$car1."\n");
}
// Appel de la fonction
operation($a,$b);

?>