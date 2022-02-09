<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>
<body>
    <form method="post" action="">
        <label for="merci">Donner l'entier N</label><br>
        <input type="text" name="merci" id="merci" placeholder="Entier N">
        <input value="Envoyer" type="submit"><br>
    </form><br>
    <!-- Creation de la fonction -->
    <?php
    if ($_POST) {
       $n=$_POST['merci'];;
    }
    
    function champs($n){
        
        if (is_numeric($n) && $n>0) {
            # code...
            for ($i=1; $i <=$n ; $i++) { 
                echo'<label for="merci">Donner l\'entier N pour input '.$i.'</label><br>';
                echo '<input type="text" name="merci" id="merci" placeholder="Input '.$i.' "><br><br>';
             }
        }else {
            echo("Merci de saisir un entier positif");
        }
        

    }
// Appel de la fonction
try {
    //code...
    champs($n);
} catch (TypeError $e) {
    //throw $th;
    echo "Veuillez saisir un entier \n:";
} 



?>
    
</body>
</html>