<?php
   function liste($n){
      
    if ($n>0 && is_numeric($n)) {
        for ($i=1; $i <= $n; $i++) { 
            echo '<ul>';
                   echo '<li>' .$i. '</li>';
            echo '</ul>';
                }
    }
    else {
        echo ("Veillez saisir un entier postif");
    }
}


?>