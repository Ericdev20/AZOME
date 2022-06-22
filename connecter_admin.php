<?php 
session_start();

@$login=$_POST["login"];
@$passe=$_POST["pass"];
@$connecter=$_POST["connecter"];
@$erreur="";
@$authentifMsg="<div class='alert alert-info'>
         <strong> Authentification Requise ! </strong> Vous devriez d'abord vous connecter ...
        </div>";

if (isset($connecter)) {
  if ($login=="admin" && $passe=="98@admin") {
    $_SESSION['auth']='oui';
    header("location:azomin_admin.php");
  } else 
    $erreur="<div class='alert alert-danger'>
 <strong> Accès Refusé ! </strong> Mauvais login ou mot de passe ...
</div>";

  }

?>

<!DOCTYPE html>
<html lang="fr">

  <?php include("head.php"); ?>
<body>

   
  <?php include("navbar.php"); ?>
<section class="section contact" style="background-image: " data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12"  style='margin: 3cm 2cm'>

         <?php  if(empty($erreur)) { 
            echo $authentifMsg;
              }else
          {
            echo $erreur;
          }
          
          ?>

          
         
        
        </div>
<form id="contact" action="" method="post">
  &nbsp
            <div class="row">
              <div class="col-md-4" >
                  <fieldset>
                    <input name="login" type="text" class="form-control" id="name" placeholder="Login" value="<?php echo $login ?>">
                  </fieldset>
                </div><br>
                <div class="col-md-4">
                  <fieldset>
                    <input name="pass" type="password" class="form-control" id="email" placeholder="Mot de Passe" value="">
                  </fieldset>
                </div><br>
                <div class="col-md-4">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button" name="connecter">S'authentifier</button>
                  </fieldset>
                </div>
          
              
            </div>
          </form>
        </div>
        </div>
      </div>
    </section>
         <?php include("footer.php");?>
</body>
</html>