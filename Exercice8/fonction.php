<?php
function liste($n){
    if ($n>0) {
        for ($i=0; $i < $n; $i++) { 
            echo '<UL>';
                   echo '<li>' .$i. '</li>';
            echo '</UL>';
            
                }
    }
    else {
        echo ("Veillez saisir un entier postif");
    }
}


?>