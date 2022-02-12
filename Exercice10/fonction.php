<?php

function champs($n){
        
    if (is_numeric($n) && $n>0) {
        # code...
        for ($i=1; $i <=$n ; $i++) { 
            echo'<label for="merci">Donner l\'entier N pour input '.$i.'</label><br>';
            echo '<input type="text" name="merci" id="merci" placeholder="Input '.$i.' "><br><br>';
         }
    }else {
        echo("Merci de saisir un entier positif");
    }
    

}

?>