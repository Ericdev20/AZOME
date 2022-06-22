<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

  <?php include("head.php"); ?>
<body>

   
  <?php include("navbar.php"); ?>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Portail enamien de</h6>
              <h2><em>Resultats</em> en ligne </h2>
              <div class="container">
              <div class="main-button">
                  <div><a href="consulter.php">Consulter mes notes</a></div>
              </div>
              <div class="main-button">
                  <div><a href="connecter_admin.php">Mettre en ligne un resultat</a>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </section>
 <?php include("footer.php"); ?>
</body>
</html>