<!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="acceuil.php"><em>AZO</em>ME</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="acceuil.php" rel="sponsored" class="external">Acceuil</a></li>
        <li class="has-submenu"><a href="consulter.php" rel="sponsored" class="external">Les notes</a>
          <ul class="sub-menu">
            <li><a href="consulter.php" rel="sponsored" class="external">Consulter une note</a></li>
            <li><a href="connecter_admin.php" rel="sponsored" class="external">Mettre en ligne des notes notes </a></li>
            <li><a href="message.php" rel="sponsored" class="external">Ecrire à l'adminitration</a></li>
          </ul>
        </li>

          <?php if(@$_SESSION['auth']=='oui') {?>
          <li><a href="deconnexion.php" rel="sponsored" class="external">Deconnecter</a></li>
        <?php }?>
      </li>
      </ul>
    </nav>
  </header>