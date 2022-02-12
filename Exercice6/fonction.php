<?php
function equation($a,$b,$c){ 
    try {
        //code...
        if($a==0)
        if($b==0)
        if($c==0)
    echo ("l'equation admet une infinité de solution");
    else{
        echo ("Impossible");
    }
    else{
        $x=-$c/$b;
        echo ("la solution de l'equation est ".$x."\t");
    }
    else{
        $del=($b*$b)-4*$a*$c;
        if ($del<0) {
            echo ("l'equation n' admet pas  de solution");
        }
        elseif($del==0){
            $xO=-$b/(2*$a);
            echo ("la solution de l'equation est ".$xO."\t");
        }
        else{
            $x1=(-$b -sqrt($del))/(2*$a);
            $x2=(-$b +sqrt($del))/(2*$a);
            echo ("les solutions de l'equation sont " ."x1 = " .$x1."\t"."et \t"."x2 = ".$x2);
            
        }
    }
    } catch (TypeError $e) {
        //throw $th;
        
        echo "Veuillez saisir des  chiffres \n:";
    }
}
?>