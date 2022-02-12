<?php
   if ($_POST) {
    $n=$_POST['ok'];
if (is_numeric($n) && $n>10000) {
require_once("fonction.php");
}else{
 echo("Veillez saisir un nombre supérieur à 10 000");
}
    $T=array(
        'premier'=>ensemblePremiers($n),
        'inferieur'=>moyenne($n),
        'superieur'=>superieur($n)
    );
}


?>