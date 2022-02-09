
<!-- *************************************************** -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <header>
        <h1>LISTE DE N VALEURS POSITIFS</h1>
    </header>
    <!-- ************************************ -->
    <?php
if ($_POST) {
    // try {
    //     //code...
    // } catch (TypeError $e) {
    //     //throw $th;
    //     echo "Veuillez saisir un entier \n:";
    // }

    // **************************************************
    $n=$_POST['entier'];
    // Creation de la fonction

    function liste($n){
        if ($n>0) {
            for ($i=1; $i <= $n; $i++) { 
                echo '<ul>';
                       echo '<li>' .$i. '</li>';
                echo '</ul>';
                    }
        }
        else {
            echo ("Veillez saisir un entier postif");
        }
    }
// appel de la fonction
    liste($n);
}
?>
    <!-- ************************************ -->
    <div class="conteneur">
<form method="post" action="">
    <label for="entier">Donner un entier positif N</label><br>
    <input type="text" name="entier" id="entier" placeholder="la valeur de N"><br><br>
    <input value="Ajouter" type="submit">
</form>
    </div>
    
</body>
</html>