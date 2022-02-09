<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 9</title>
</head>
<body>
    <header>
        <h1>TABLE DE MULTIPLICATION</h1>
    </header>
    <div class="conteneur">
    <div class="formulaire">
<form method="post" action="">
    <label for="entier"> Donner un entier</label><br><br>
    <input type="text" name="entier" placeholder="Entier N" class="entier">
    <input value="Ajouter" type="submit" class="ok">
</form>
</div>
<!-- ************************************* -->
<div class="validation">
<?php
    if ($_POST) {
        $n=$_POST['entier'];
        // creation de la fonction
        function multiplication($n){
            if ($n>0) {
                for ($i=1; $i <=10 ; $i++) { 
                    echo '<ul>';
                    echo '<li>'  .$n."x".$i. "=" .$i*$n. '</li>';
                    echo '</ul>';
                    
                }
                
            }
            else {
               echo("Veillez saisir un entier positif");
            }

        }
    }

//    Appel de la fonction
multiplication($n);
    ?>
</div>
</div>

<footer>
    <h1>SONATEL -- ACADEMY</h1>
</footer>
</body>
</html>