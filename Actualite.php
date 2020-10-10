<?php 
require_once("fonctions/db.php");


$requete="SELECT *,SUBSTRING(description,1,2000) as description FROM actualite inner join users on actualite.id_user=users.id_user order by actualite.id_act desc limit 20";     
$resultat=$pdo->query( $requete);

?>

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
        <?php require"partials/linkspart.php"; ?>

        
        <?php while($actualite=$resultat->fetch()){ ?>
           <h1 style="color: #228B22;margin-left: 50px;"><p> <?php echo ($actualite['titre'])?></p></h1><hr size="5" color="black">
         
          <div class="p"> 
            <img style="border-radius:50%;border-style: groove;" src="avatar/<?php echo $actualite['name_photo']?>" height="40px" width="40px">
          </div>
        <div class="texto">  
         
           <strong> <?php echo $actualite['nom']?> <?php echo $actualite['prenom']?> | <?php echo ($actualite['date_pub'])?> |</strong>
        </div>

<div class="d">
            <p style="margin-left: 30px;">
            <?php echo $actualite['description']?></p>

          </div>
<a href="lire.php?id_act=<?php echo $actualite['id_act']?>" style="background-color:blue;margin-left: 70px;margin-top: 2px;margin-bottom:10px;width: 100px;padding:3px 4px; font-size: 15px;color: white;">Lire la suite</a>
            <?php 
          }
          ?> 

          <?php ?>

          <?php 

          "Mzungu";?>
      <?php require'partials/footer.php'; ?>
    </div><!--fermeture du conteneur du site-->
  </body>
</html>
