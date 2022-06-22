<?php 
session_start();
if(@$_SESSION['auth']!='oui'){
  header("location:connecter_admin.php");
}
require('dbase.php');

$matiere=$_GET['matiere'];
$filliere=$_GET['filliere'];
$reqEtu=$bdd->prepare("SELECT
    `etudiantss`.`matricule`,
    `etudiantss`.`prenom`,
    `etudiantss`.`nom`,
    `fillieres`.*
FROM
    `etudiantss`
LEFT JOIN `fillieres` ON `etudiantss`.`idfilliere` = `fillieres`.`idfilliere`
WHERE
    `fillieres`.`idfilliere` = ?;");
$reqEtu->execute(array($filliere));



?>
<!DOCTYPE html>
<html lang="fr">
  <?php 
  include 'sectionVideo.php';
  include("head.php"); 
  ?>
<body style="">
<?php include("navbarAdmin.php"); ?>
<section class="section video" data-section="section5" style="height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-12  align-self-center" style="color:#fff;">

          <h2> Listes des etudiants : </h2>
          <div style="margin-top: 20px ;font-size: 14pt; color: #f5a425; ">

          	<?php while ($info=$reqEtu->fetch()) { ?>
 <form id="contact" action="inserer.php" method="get">
 	
            <div class="row" >
     <div class="col-md-4" style="text-align: center;" ><?php echo $info['nom'].' '.$info['prenom'] ; ?></div>

                <div class="col-md-4">
                 <input name="note" type="number"  min="0" max="20" class="form-control" id="email" placeholder="Note obtenue" value="">
                 <input type="hidden" name="matricule" value="<?=$info['matricule'];?>">
         		<input type="hidden" name="filliere" value="<?=$filliere;?>">
				<input type="hidden" name="matiere" value="<?=$matiere;?>">


                  </div>

                <div class="col-md-4">
                   <button  
                    type="submit" 
                    id="form-submit"
                    class="btn btn-info button"
                    onclick="f()" 
                    name="enregistrer">Enregistrer</button>
                 </div>
					</div>
					 
          </form><?php } ?>
          </div>
          	
			

        </div>
        
      </div>
    </div>
  </section>
</body>
</html>