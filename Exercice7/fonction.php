<?php
// Premiere fonction 
function Nbjour($mois,$annee){
    switch (mois) {
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
                if ((annee%4==0 && annee%100!=0)||(annee%400==0)) {
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
            if ( $mois==1 ||$mois==3||$mois==5||$mois==7||$mois==8||$mois==10) {
                $mois+=1;
               echo("la date suivante est:\t".$jour."/".$mois."/".$annee);
                
            }
            if ( $mois==4 ||$mois==6||$mois==9||$mois==11) {
                $mois+=1;
                echo("la date suivante est:\t".$jour."/".$mois."/".$annee);
                
            }
            if ($mois==2) {
                $mois+=1;
                    echo("la date suivante est:\t".$jour."/".$mois."/".$annee);   
            } 
            
            }
        }
        else{
            echo("Attention verifier la date que vous venez de saisir");
        }
        
  

}





?>