<?php                                         
 if ( isset($_POST) ) {
     $contenue=$_POST['text'];
$searchString = "/\s+/";
$replaceString ="";
$originalString = $contenue;

$textcorrige = preg_replace($searchString, $replaceString, $originalString);
if(preg_match("/^[A-Z]/",$textcorrige) ) 
 {echo $contenue; 
}
else {
    echo "commence par une lettre majuscule"; 
} echo die();
    // *****************************
    // echo("$originalString \n"); 
    if ($textcorrige) {
        # code...
    }
    echo $textcorrige; 
// echo("$textcorrige");                                            
 }


//  *******************************
 
 
 

?>


