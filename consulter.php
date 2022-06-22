<!DOCTYPE html>
<html lang="fr">

  <?php include("head.php"); ?>

<body>

  <?php include("navbar.php"); ?>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="container">
          
            <div class="top-content">
              <h6>Entrez votre <em>numero matricule</em> pour voir vos notes</h6>
            </div>
            <form id="contact" action="resultat.php" method="get">
                <input name="matricule" type="text" class="form-control" id="name" placeholder="Matricule" name="matricule"  required=""><button type="submit" id="form-submit" class="button" name="consulter">consulter</button>
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
 <?php include('footer.php'); ?>
</body>
</html>