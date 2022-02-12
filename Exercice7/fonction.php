<?php
// Premiere fonction 
function Nbjour($mois,$annee){
    switch ($mois) {
        case 4: 
         $Nbjour=30;
            break;
         case 6: 
          $Nbjour=30;
            break;
            case 9: 
             $Nbjour=30;
            break;
            case 11: 
             $Nbjour=30;
            break;
            case 2: {
                if (($annee%4==0 && $annee%100!=0)||($annee%400==0)) {
                  $Nbjour=29;     
                } else {
                 $Nbjour=28;    
                }  
            }
            break; 
            default: $Nbjour=31;  
    }
   return $Nbjour;
        }



// Fonction Deuxiéme
function date_suivant($jour,$mois,$annee){
    if(($jour>0 && $jour <=Nbjour($mois, $annee))&&($mois>=1 && $mois<=12)&&($annee>0)){
         $jour1=Nbjour($mois,$annee);
        if ($jour1!=$jour){
            $jour+=1;
            
            echo("la date suivante est:".$jour."/".$mois."/".$annee);   
        }
        else{
            $jour=1;
            if ($mois==12) {
                $mois=1;
                $annee+=1;
                echo("la date suivante est:\t".$jour."/".$mois."/".$annee);     
            }
            else{
                $mois+=1;
                echo("la date suivante est:\t".$jour."/".$mois."/".$annee); 

            }
                    
}


    }
    else{
        echo("Verifier la date saisie");
    }
}


//***************************************************** */
function date_precedent($jour,$mois,$annee){

        if(($jour>0 && $jour <=Nbjour($mois, $annee))&&($mois>=1 && $mois<=12)&&($annee>0)){

            $jour1=Nbjour($mois,$annee);

            if ($jour<=$jour1){
                if ($jour!=1) {
                    $jour-=1;
                    echo("la date precedente est:".$jour."/".$mois."/".$annee); 
                }
                else {
                    if ($mois==1) {
                    $jour=Nbjour($mois,$annee);
                    $mois=12;
                    $annee-=1;
                    echo("la date precedente est:".$jour."/".$mois."/".$annee); 
                    
                    }
                    elseif ($mois==3) {
                        $mois-=1;
                        $jour=Nbjour($mois,$annee);
                        echo("la date precedente est:".$jour."/".$mois."/".$annee); 


                       
                    }

                else{
                    $jour=$jour1;
                    $mois-=1;
                    echo("la date precedente est:\t".$jour."/".$mois."/".$annee);      
                            
        }
        
            
                
            }
            
        
                
            }

        
        else{
            echo("Verifier la date saisie");
        }
}
}



?>