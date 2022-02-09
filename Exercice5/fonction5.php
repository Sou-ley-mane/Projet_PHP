<?php
// Coordonnées de X
$x1=rand(1,20);
$x2=rand(1,20);
// Coordonnées de Y
$y1=rand(1,20);
$y2=rand(1,20);
// Le point X=(x1,x2)
$x=array($x1,$x2);
// Le point Y=(y1,y2)
$y=array($y1,$y2);
// Creation de fonction
function distance($x,$y){
    $distan=sqrt((pow($y[0]-$x[0],2))+(pow($y[1]-$x[1],2)));
    echo("La distance entre les points X et Y est :" .$distan);

}
// Appel de la fonction
distance($x,$y);







?>