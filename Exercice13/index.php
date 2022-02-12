<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Exercice 13</title>
</head>
<body>

    <header>
<h1>GESTION D'UN DOCUMENT</h1>
    </header>
    <div class="conteneur">

    <div>
    <form method="post" action="">
        <!-- ****** *******************************-->
        <div>
        <label for="">SAISIR UN TEXTE</label><br>
        <textarea name="text" id="" cols="80" rows="40"></textarea><br>
        <input type="submit" name="valider"><br>
        </div>
<!-- ************************************ -->
        <div>
        <label for="">TEXTE APRÉS CORRECTION</label><br>
        <textarea name="" id="" cols="80" rows="40"><?php                                         
include_once("controle.php");
?>
        </textarea><br>
        </div>
    </form>
    </div>
  
    </div>

    <footer>
        <h3>SONATEL -- ACADEMY</h3>
    </footer>
</body>
</html>