

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
     
        require_once("controle.php");
        equation($a,$b,$c);
        ?>

        </div>

    </div>

    <footer>
        <h3>SONATEL - ACADEMY</h3>
    </footer> 
</body>
</html>