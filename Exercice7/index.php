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
       require_once("controle.php");
       //   Nbjour($mois,$annee);
  date_suivant($jour,$mois,$annee);
  date_precedent($jour,$mois,$annee);

    
?>
 </div>


    <div class="conteneur">
    <form method="post" action="">
        <legend>DATE</legend>
    <label for="jour">Jour</label>
    <input type="text" name="jour" id="jour">
        
        <label for="mois">mois</label>
        <input name="mois" id="mois">
       
        <label for="Annee">Année</label>
        <input name="annee" id="Annee"><br>
        
<input value="Ajouter" type="submit" class="ok">
    </form>
    </div>
   

    <footer>
        <h3>SONATEL - ACADEMY</h3>
    </footer>
</body>
</html>