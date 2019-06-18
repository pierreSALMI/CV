<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CV - formation</title>
    <?php include './pdo.php'; ?>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./index.php">BLOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./info_perso.php" >Qui suis-je?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./competences.php" >Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./projets.php" >Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./formation.php" >Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./experience.php" >Expériences</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid mt-3">

      <?php 
            $req = $pdo->prepare('SELECT * FROM formations'); 
            $req->execute();
            $formation = $req->fetchAll();
        ?> 
      <?php 
        for($i = 0; $i <= count($formation) - 1; $i++){
            $formation1 = $formation[$i];
      ?>
        <div class="row mt-3">
          <div class="col-md-auto text-center">
            <h2><?=$formation1['nom'] ?></h2>
            <p><?=$formation1['lieu'] ?></p>
            <p><?=$formation1['date'] ?></p>
            <p><?=$formation1['diplome'] ?></p>
          </div>
          <div class="col mt-3">
              <p><?=$formation1['description'] ?></p> 
          </div>
        </div>
    </div>
        <?php }; ?>


<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4 position-absolute w-100 text-center mt-5">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <!--Facebook-->
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1"href="https://www.facebook.com/pierre.mosalpache">
            <img style="max-width: 50px; max-height: 50px;" class="white-text mr-md-5 mr-3 fa-2x" src="./images/facebook.png" >
        </a>
      </li>
      <!--twitter-->
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1"href="https://twitter.com/ishisarumi">
            <img style="max-width: 50px; max-height: 50px;" class="white-text mr-md-5 mr-3 fa-2x" src="./images/twitter.png" >
        </a>
      </li>
      <!--Linkedin-->
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
            <img style="max-width: 50px; max-height: 50px;" class="white-text mr-md-5 mr-3 fa-2x" src="./images/linkedin.png" >
        </a>
      </li>
      <!--Instagram-->
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1" href="https://www.instagram.com/pierresalmi/">
            <img style="max-width: 50px; max-height: 50px;" class="white-text mr-md-5 mr-3 fa-2x" src="./images/instagram.png" >
        </a>
      </li>

      <!--Pinterest-->
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1" href="https://www.instagram.com/pierresalmi/">
            <img style="max-width: 50px; max-height: 50px;" class="white-text mr-md-5 mr-3 fa-2x" src="./images/pinterest.png" >
        </a>
      </li>

      <!--Github-->
      <li class="list-inline-item" href="">
        <a class="btn-floating btn-li mx-1" href="https://www.instagram.com/pierresalmi/">
            <img style="max-width: 50px; max-height: 50px;" class="white-text mr-md-5 mr-3 fa-2x" src="./images/github.png" >
        </a>
      </li>
    <!--Contact-->
    <li class="list-inline-item" href="">
        <a class="btn-floating btn-li mx-1" href="./contact.php">
            <img style="max-width: 50px; max-height: 50px;" class="white-text mr-md-5 mr-3 fa-2x" src="./images/mail.png" >
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer --> 
</body>
</html>