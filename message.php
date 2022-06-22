<!DOCTYPE html>
<html lang="fr">

  <?php include("head.php"); ?>
<body>

   
  <?php include("navbar.php"); ?>
<section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Dites en quoi pouvons-nous vous aider</h2>
          </div>
        </div>
<form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-4">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nom et Prenoms" required="">
                  </fieldset>
                </div>
                <div class="col-md-4">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-4">
                  <fieldset>
                    <input name="matricule" type="text" class="form-control" id="email" placeholder="Matricule" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Votre message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Envoyer maintenant</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
    </section>
         <?php include("footer.php"); ?>
</body>
</html>