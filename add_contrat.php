<?php ob_start();
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>R.T.N.B</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bulma/css/bulma.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container is-fullhd">
    <div class="notification is-success">
        
      <div class="container is-fullhd">
      <div class="notification is-danger">
        
        <div class="container is-fullhd">
        <div class="notification is-white">

        <div id="page">
          <span class="icon-text">
                <span><img src="images/rtnb.png"></span>
                <span style="margin-left: 750px"><div class="logo"><marquee><img src="images/logo.jpg"></marquee></div></span>
                <span><iframe name="date du jour" id="date-du-jour" style="width:105px;height:75px;" src="https://www.mathieuweb.fr/calendrier/date-jour-bleu.html" scrolling="no" frameborder="0" allowtransparency="true"></iframe></span>
              </span>

<?php require'functions/db.php'; 
      require'functions/add_contrat_func.php';
      require'messages/mcontrat.php'; ?>

<span class="icon-text">
  <span>
<div style="margin-top: 25px">
<?php require'menu/menu.php';
      ?>    
</div>
</span>
<span style="margin-top: -150px;margin-left: 55px">
  <?php require'statistiques/statistique_contrat.php'; ?>
  <?php require'statistiques/statistique_msg.php'; ?>
  </span> 
<span style="margin-left: 200px;margin-top: -453px">
              <form class="notification is-white" method="POST" enctype="multipart/form-data">
              
                   <div class="container is-fullhd"> 
                    <div id="form" class="notification is-white">
                        <div id="ti_form" class="notification is-white is-small"><strong>Ajout d'un nouveau Contrat à :</strong><br><br>

                          <strong><i><?php echo $mzungu['nom_part']?> <?php echo $mzungu['prenom_part']?> de <?php echo $mzungu['adresse_part']?></i></strong>

                        </div>

                        <label><strong>Fichier(PDF)</strong></label>
                        <input required="" id="input" class="input is-success is-small " type="file" name="nom_contrat" >
                   
                     <label><strong> Date Sign</strong></label>
                      <input required="" id="input" class="input is-success is-small" type="date" name="date_sign"><br><br>
                  
                        <label><strong> Date Expire</strong></label> 
                        <input required="" id="input" class="input is-success is-small" type="date" name="date_exp">
               
                      <!-- <label><strong> Periode</strong></label>
                        <input id="input" class="input is-success is-small" type="text" name="periode" placeholder="Periode">-->

                        <input required="" id="input" class="input is-success is-small" type="hidden" name="etat_contrat" value="Encours" >
                    
                        <input required="" id="input" class="input is-success is-small" type="hidden" name="employe" value="<?php echo $_SESSION['id_emp']?>">
 
                        <input required="" id="input" class="input is-success is-small" type="hidden" name="partenaire" value="<?php echo $mzungu['id_part']?>" ><br><br>
                        

                     <input class="button is-success" type="submit" name="nom_contrat" value="Enregistrer">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                     <a class="button is-small is-info" href="list_part.php"><i>Liste des Partenaires</i></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                     <a class="button is-small is-info" href="list_contrat_encours.php"><i>Liste des Contrats</i></a>
                    
                </div>
                    </div>
                </form>
                 </span>

                 </span>
            </div>
<?php require'menu/footer.php';?>

        </div>
        </div>

      </div>
      </div>

    </div>
    </div>

</body>
</html>