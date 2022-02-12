<?php
// Coordonnées de X
$x1=rand(1,20);
$x2=rand(1,20);
$y1=rand(1,20);
$y2=rand(1,20);
$x=array($x1,$x2);
$y=array($y1,$y2);
include_once("fonction5.php");
// Appel de la fonction
distance($x,$y);

?>