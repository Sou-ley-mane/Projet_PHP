

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Equation</title>
</head>
<body>
    <header>
        <h1>APLLICATION DE RÉSOLUTION D'ÉQUATION DU SECOND DEGRE</h1>
    </header>
    <div id="conteneur">

        <div class="form">
            <form method="post" action="">
                <legend><h3>LES COEFFICIENTS DE L'EQUATION A RESOUDRE</h3></legend><br>
                <label for="a">Donner la valeur de a</label>
                <input type="text" id="a" name="a" required="" placeholder="la valeur de a" class="ok"><br><br>

                <label for="b">Donner la valeur de b</label>
                <input type="text" id="b" name="b" required="" placeholder="la valeur de b" class="ok"><br><br>

                <label for="c">Donner la valeur de c</label>
                <input type="text" id="c" name="c" required="" placeholder="la valeur de b" class="ok"><br><br><br>

                <input type="submit" value="Solution" id="bouton">
            </form>
        </div>


        <div class="form1">
         
        <?php
     
        // fonction
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
            
        if($_POST)
        {
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
        echo "la valeur de a est : $a <br>";
        echo "la valeur de b est : $b <br>";
        echo "la valeur de c est : $c <br><br>";
        equation($a,$b,$c);
       

        }
      
        ?>

        </div>

    </div>

    <footer>
        <h3>SONATEL - ACADEMY</h3>
    </footer> 
</body>
</html>