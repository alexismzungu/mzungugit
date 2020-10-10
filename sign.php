<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="page"><!--conteneur du site-->
        <div class="headpart"><!--entete-->
          <marquee>
            <h3>Tacher de quitter cette terre#</h3>
          </marquee>
        </div>
        <?php require"partials/linkspart.php";
              require"fonctions/db.php";
              require"fonctions/sign_func.php";
         ?>
        <h1>Page d'inscription</h1><hr>
         <a href="login.php" style="background-color:green;margin-left: 700px;margin-top: 2px;margin-bottom:5px;width: 100px;padding:3px 8px; font-size: 15px;color: blue;">connectez-vous</a>
       
        <div class="error">
          <?php
            if(isset($error)){
              echo $error;
            }
          ?>
        </div>
        <div class="success">
          <?php
            if(isset($success)){
              echo $success;
            }
          ?>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <label for="nom">Votre nom</label>
          <input type="text" name="nom" id="nom" placeholder="votre nom"/>

          <label for="prenom">votre prénom</label>
          <input type="text" name="prenom" id="prenom" placeholder="prenom"/>

          <label for="organisation">organisation</label>
          <input type="text" name="organisation" placeholder="organisation"/>

          <label for="">votre pays</label>
          <select class="" name="pays">
            <?php ;
            $query=$pdo->prepare("SELECT * FROM pays");
            $query->execute();
            while($result=$query->fetch())
            {?>
      <option value="<?php echo $result['id_pays']?>"><?php echo $result['nom_pays']?></option>
          <?php  }  ?>
          </select>

          <label for="email">Votre email</label>
          <input type="text" name="email" placeholder="email">

          <label for="password">Mot de passe</label>
          <input type="password" name="password" placeholder="password"/>
          <input type="submit" name="submit" value="Je m'inscris">
        </form>

        <?php require 'partials/footer.php'; ?>
    </div><!--fermeture du conteneur du site-->
  </body>
</html>
