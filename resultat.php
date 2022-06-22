<?php
require("dbase.php");          

//Stoker les variables
if(isset($_GET["matricule"])){
      
   				$matricule=$_GET['matricule'];
          $req=$bdd->query("SELECT * FROM etudiantss where matricule=$matricule");
        if(!$req->fetch()) 
            header("location:erreur.php");
        else {
                   
        
        
              //Recuperer les informations de l'etudiant
         $getResult=$bdd->prepare("SELECT
    `etudiantss`.`nom`,
    `fillieres`.`fillliere`,
    `etudiantss`.`prenom`,
    `resultat`.`notes`,
    `resultat`.`matricule`,
    `matieres`.`credit`,
    `matieres`.`nomMat`
FROM
    `etudiantss`
LEFT JOIN `fillieres` ON `etudiantss`.`idfilliere` = `fillieres`.`idfilliere`
LEFT JOIN `resultat` ON `resultat`.`matricule` = `etudiantss`.`matricule`
LEFT JOIN `matieres` ON `matieres`.`codMat` = `resultat`.`codMat`
WHERE
    `resultat`.`matricule` = ?");
                       $getResult->execute(array($matricule));
                      $resultInfos=$getResult->FetchAll();
          
                     }    	                	
}else
    header("location:consulter.php");
    
    //}               
?>
<!DOCTYPE html>
<html lang="fr">

  <?php include("head.php"); ?>
<body>
	<?php include("navbar.php"); ?>
<section class="section courses" data-section="section4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2><?php echo $resultInfos[0]["nom"].' '.$resultInfos[0]['prenom'].' : '.$resultInfos[0]['fillliere']; ?></h2>
          </div>
        </div>
        <div>
        <table class="table table-bordered table-responsive" style="color: #f5a425; text-align: center;">
    <thead>
      <tr>
        <th scope="col">Matières</th>
        <th scope="col">Credit </th> 
        <th scope="col">notes obtenues </th> 
        
      </tr>
    </thead>
    <?php for($i=0;$i<count($resultInfos); $i++){?> 
    <tbody> 
      <tr>
          <td><?= $resultInfos[$i]['nomMat']; ?></td>
          <td><?= $resultInfos[$i]['credit']; ?></td>
          <td><?= $resultInfos[$i]['notes']; ?></td>
        </tr>
      </tbody>
    <?php } ?>
  </table>
</div>
        </div>
    </div><br><br><br><br>
  </section>
  <?php include("footer.php"); ?>
</body>
</html>