

<?php
//******************************************/                                         
function supprimeEspace($chaine){
    $valeur = preg_replace('/\s+/',' ', $chaine);
    $res=deleteSpecialChar($valeur);
    // $res=premierLetMaj($res);
    echo $res;
}


//--------------------------------------------

function deleteSpecialChar($str) {  
    // remplacer tous les caractères spéciaux par une chaîne vide
    $res = str_replace( array( '%', '@', '\'', ';', '<', '>' ), '', $str); 
    return $res;
}

//-----------------------------------------
function majiscule($str){
    if (preg_match("/^[A-Z]/","$str") && strlen($str)>=25){
         supprimeEspace($str); 
    }else {
        echo("Commencez par une lettre majiscule");
    }

}
// -------------------------------------------

if (isset($_POST) ) {
    $contenu=$_POST['text'];
   
    // *********************
    // Appeler la fonction
//    supprimeEspace($contenu);
   majiscule($contenu);

    
   
   
    

}

?>

