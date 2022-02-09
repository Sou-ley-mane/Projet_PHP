<?php
function ensemblePremiers($n){
    $tab=[];
    $j=0;
    //On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
    for($i=2;$i<=$n;$i++){
        
        $nbDiv = 0;//Et on compte le nombre de diviseur    
        for($k=1;$k<=$i;$k++){
            if($i%$k==0){
                $nbDiv++;            
            }
        }
        if($nbDiv == 2){
    $tab[$j]=$i;
    $j++;     
        }
    }
    return $tab;
}

echo $moy;
// ******************Fonction N°2********************
function moyenne($n){
    $tab1=[];
    $j=0;
    $som=0;
    $tableau=ensemblePremiers($n);
    $N=sizeof($tableau);
    for ($i=0; $i <$N ; $i++) { 
       $som+=$tableau[$i];
    }
    $moy=$som/$N;
   
    for ($i=0; $i<$N ; $i++) { 
        if ($tableau[$i]<$moy) {
      $tab1[$j]=$tableau[$i];
      $j++;
     
        }
    }
return $tab1;
}

// *****************FONCTION N°3******************************
function superieur($n){
    $tab2=[];
    $j=0;
    $som=0;
    $tableau=ensemblePremiers($n);
    $N=sizeof($tableau);
    for ($i=0; $i<$N ; $i++) { 
       $som+=$tableau[$i];
    }
    $moy=$som/$N;
    for ($i=0; $i <$N ; $i++) { 
        if ($tableau[$i]>$moy) {
      $tab2[$j]=$tableau[$i];
      $j++;
     
        }
    }
    echo $moy;
return $tab2;
}




?>