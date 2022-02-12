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
include_once("controle.php");
    


    ?>
</div>
</div>

<footer>
    <h1>SONATEL -- ACADEMY</h1>
</footer>
</body>
</html>