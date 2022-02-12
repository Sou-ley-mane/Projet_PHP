<?php	
if (isset($_POST['lang'])&&$_POST['lang']=='fr') {
        include('fr-lang.php');

    // if ($_POST['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
    //     include('fr-lang.php');
        
        } 
        
        else if ($_POST['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
        include('en-lang.php');
        
        }
        
        else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
       include('fr-lang.php');
       } 
   
	 
// Fonction
function Affichage(array $tab):void{
    $contenu='<table  border="1" bgcolor="yellow">';
    for ($i=1; $i <=sizeof($tab) ; $i++) {
        if ($i%4==1) {
            $contenu.="<tr>";
        } 
        $contenu.='<td>' .$tab[$i-1].'</td>';
        if ($i%4==0) {
            $contenu.="</tr>";
        }    
    }
    $contenu.='</table>';

    echo $contenu;

}



  	 ?>