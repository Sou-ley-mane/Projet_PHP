<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
    <!-- ************************************************************* -->
    <div class="conteneur">
        <div>
            <img src="ins.jpeg" width="600" class="img"  alt="">
        </div>
<form method="post" action="">
    <div>
<label for="login">Login</label ><br>
<input type="email" id="email" name="email" placeholder="exemple@gmail.com" class="ok"><br><br>
<label for="mdp">Mot de passe</label><br>
<input type="password" id="mdp" name="mdp" class="ok"><br><br>
<label for="nom">Nom</label ><br>
<input type="text" id="nom" name="nom" placeholder="votre nom" class="ok"><br><br>
<label for="prenom">Prénom</label><br>
<input type="text" id="prenom" name="prenom" placeholder="votre prénom" class="ok"  ><br><br>
<label for="role">Votre Role</label><br>
<select name="role" id="" id="role" class="ok">
    <option value="admin"> Admin</option>
    <option value="visiteur">Visiteur</option>
</select><br><br><br>
<input type="submit" name="inscription" value="S'inscrire" class="bouton">
</div>
</form>

</div>
</body>
</html>