<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
</head>
<body>
    <form method="post" action="">
        <label for="ok">Donner une valeur supérieure à 10 000</label><br>
        <input type="text" name="ok" id="ok">
        <input type="submit" value="Valider">
    </form>
    
    <!-- Creation de la fonction -->
    <?php
    include_once("controle.php")
 

    // Affichage du tableau
      
?>

<table border="1" cellpadding="12" cellspacing="12" bgcolor="yellow" >

<thead>
    <td>premiere</td>
    <td>inferieur</td>
    <td>superieur</td>
</thead>
<tbody>
   <?php
    $a=count($T['premier']);
     for($i=0 ; $i< $a;$i++){
    ?>
     <tr>
         <td>
             <?php
             echo $T['premier'][$i];
             ?>
         </td>
         <td>
             <?= $T['inferieur'][$i];?>
         </td>
         <td>
             <?= $T['superieur'][$i];?>
         </td>
     </tr>
    <?php
        }
    ?>
   
</tbody>

</table>
    <!-- ************************ -->
</body>
</html>