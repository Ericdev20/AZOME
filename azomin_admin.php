<?php
session_start();
if(@$_SESSION['auth']!='oui'){
  header("location:connecter_admin.php");
}
require("dbase.php");
//requete fillière
$reqFil=$bdd->query("SELECT *
FROM fillieres ");
//requete matières
$reqMat=$bdd->query("SELECT *
FROM matieres ");

?>

<!DOCTYPE html>
<html lang="fr">

  <?php include("head.php"); ?>
  
<body>

   
  <?php include("navbar.php");?>
  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="container">
          
            <div class="top-content">
              <h6>Fournissez <em>les informations</em> pour voir mettre en ligne le resultat</h6>
            </div>
            <form id="contact" action="admin_note.php" method="get">

       <!--fillières -->
               <select class="form-select" style="background-color: rgba(255,255,255,0.3);
                color:#fff;border:none; margin-top:50px;" aria-label="Default select example" name="filliere">
                 <option selected >FILLIERES</option>

                 <?php while ($fil=$reqFil->fetch()) { ?>

                  <option style="color:#000;" value="<?php echo $fil['idfilliere']; ?>"><?php echo $fil['fillliere']; ?></option>

                  <?php } ?>
               </select>
     <!--matières -->
               <select class="form-select" style="background-color: rgba(255,255,255,0.3);
                    color:#fff;border:none; margin-top:50px;" aria-label="Default select example" name="matiere">
                 <option selected>MATIERES</option>

                 <?php while ($mat=$reqMat->fetch()) { ?>

                  <option style="color:#000;" value="<?php echo $mat['codeMat']; ?>"> <?php echo $mat['nomMat']; ?> </option>
                <?php } ?>
               </select>

                <button type="submit" id="form-submit" class="button" name="consulter"style="background-color:#fff ;color:#f5a425;">continuer</button>
                <!--
                  <input name="email" type="text" class="form-control" id="email" placeholder="Filière" required="" name="filliere">
                  <div class="col-md-12">
                  -->
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

         <?php include("footer.php"); ?>
</body>
</html>