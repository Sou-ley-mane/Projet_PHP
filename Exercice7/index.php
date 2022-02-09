<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Date</title>
</head>
<body>
    <header>
        <h1>DATE</h1>
    </header>

   <div class="date">
       <?php
       if ($_POST) {
        $jour=$_POST['jour'];
        $mois=$_POST['mois'];
        $annee=$_POST['annee'];
        // echo ("La date saisie est : \t".$jour."/".$mois."/".$annee."\t");
    //   *****************************************
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
                break;
        }
       return $Nbjour;
            }
    
    // *******************************************
    function  date_suivant($jour,$mois,$annee):void{
        if(($jour>0 && $jour<=31)&& ($mois>0 && $mois<=12)&&($annee>0))  {
           
        $contenue="";
        
        $jour1=Nbjour($mois,$annee);

       if ($jour1!=$jour){
           $jour+=1;
           $contenue= "la date suivante est:".$jour."/".$mois."/".$annee;   
       }
       else{
           $jour=1;

           if ($mois==12) {
               $mois=1;
               $annee+=1;
               $contenue= "la date suivante est:".$jour."/".$mois."/".$annee;   
                   
           }
           elseif ( $mois==1 ||$mois==3||$mois==5||$mois==7||$mois==8||$mois==10) {
               $mois+=1;
               $contenue= "la date suivante est:".$jour."/".$mois."/".$annee;   
               
           }
           elseif ( $mois==4 ||$mois==6||$mois==9||$mois==11) {
               $mois+=1;
               $contenue= "la date suivante est:".$jour."/".$mois."/".$annee;   
               
           }
           elseif ($mois==2) {
               if ($jour1>29) {
                   echo("Vous etes au mois de fevrier");
                   # code...
               }else{
                $mois+=1;
                $contenue= "la date suivante est:".$jour."/".$mois."/".$annee;   
               }
           
               
           } 
     
           }
        

       }else{
           echo ("Vérifier la date saisie");
       }
             
       echo $contenue;
        }

    // ********************************************
    // Corps du programme
  
    date_suivant($jour,$mois,$annee);
      
       }
?>
 </div>

    <div class="conteneur">
    <form method="post" action="">
        <legend>DATE</legend>
    <label for="jour">Jour</label>
    <input type="text" name="jour" id="jour">
        
        <label for="mois">mois</label>
        <select name="mois" id="mois">
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Aout</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>
        <label for="Annee">Année</label>
        <input name="annee" id="Annee">
        
<input value="Ajouter" type="submit" class="ok">
    </form>
    </div>
   

    <footer>
        <h3>SONATEL - ACADEMY</h3>
    </footer>
</body>
</html>