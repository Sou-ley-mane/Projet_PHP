<?php
if (isset($_POST) ) {
    $n=$_POST['entier'];
    include_once("fonction.php");
    //    Appel de la fonction
multiplication($n);
  
}

?>