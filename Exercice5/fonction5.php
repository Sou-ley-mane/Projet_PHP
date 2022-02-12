<?php
// Creation de fonction
function distance($x,$y){
    $distan=sqrt((pow($y[0]-$x[0],2))+(pow($y[1]-$x[1],2)));
    echo("La distance entre les points X et Y est :" .$distan);

}

?>