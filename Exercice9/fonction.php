<?php
  // creation de la fonction
  function multiplication($n){
    if ($n>=0) {
        for ($i=1; $i <=12 ; $i++) { 
            echo '<ul>';
            echo '<li>'  .$n."x".$i. "=" .$i*$n. '</li>';
            echo '</ul>';
            
        }
        
    }
    else {
       echo("Veillez saisir un entier positif");
    }

}

?>