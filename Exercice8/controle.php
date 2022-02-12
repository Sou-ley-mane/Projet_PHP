<?php
if (isset($_POST) ) {
    if (!empty($_POST)) {
        $n=$_POST['entier'];
        require_once("fonction.php");
        liste($n);
    }
       
    }
   





?>