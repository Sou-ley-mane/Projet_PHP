<?php
if(isset($_POST) )
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
   

  if ( is_numeric($a) &&  is_numeric($b) &&  is_numeric($c)) {
    echo "la valeur de a est : $a <br>";
    echo "la valeur de b est : $b <br>";
    echo "la valeur de c est : $c <br><br>"; 
    }

    require_once("fonction.php");
   
   
}

?>