<?php

if (isset($_POST)) {
    $n=$_POST['merci'];
    include_once("fonction.php");
    // Appel de la fonction

    champs($n);


 }


?>