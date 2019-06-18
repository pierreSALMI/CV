<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CV - compétences</title>
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

    <div class="container mt-4">
        <!-- first line-->
        <div class="row mb-5">
           
            <!-- WEB -->
            <?php 
                $req = $pdo->prepare('SELECT * FROM competences WHERE aled = "web" '); 
                $req->execute();
                $web = $req->fetchAll();
            ?> 
            <div class="col text-center">
                <h2> WEB </h2>
            <?php 
                for($i = 0; $i <= count($web) - 1; $i = $i + 2){
                    $web1 = $web[$i];
                    if($i+1 < count($web)){
                        $web2 = $web[$i + 1];
                    } else{
                        $web2 = array(
                            "nom" => "",
                            "note" => "",
                        );
                    };
                    
            ?>
                <!-- row 1-->
                <div class="row mt-2">
                    <!-- col 1.1-->
                    <div class="col">
                        <h3><?=$web1['nom']; ?></h3>
                        <p><?=$web1['note']; ?></p>
                    </div>
                    <!-- col 1.2-->
                    <div class="col">
                        <h3> <?=$web2['nom']; ?></h3>
                        <p><?=$web2['note']; ?></p>
                    </div>
                </div>
            <?php }; ?>
            </div>
            

            <!-- Logiciel --> 
        
            <?php 
                $req = $pdo->prepare('SELECT * FROM competences WHERE aled = "logiciel" '); 
                $req->execute();
                $logiciel = $req->fetchAll();
            ?>
        <div class="col text-center">
                <h2>Logiciel</h2>
                <?php 
                for($i = 0; $i <= count($logiciel) - 1; $i = $i + 2){
                    $logiciel1 = $logiciel[$i];
                    if($i+1 < count($logiciel)){
                        $logiciel2 = $logiciel[$i + 1];
                    } else{
                        $logiciel2 = array(
                            "nom" => "",
                            "note" => "",
                        );
                    };
            ?>
                <!-- row 1-->
                <div class="row mt-2">
                    <!-- col 1.1-->
                    <div class="col">
                        <h3><?=$logiciel1['nom']; ?></h3>
                        <p><?=$logiciel1['note']; ?></p>
                    </div>
                    <!-- col 1.2-->
                    <div class="col">
                        <h3><?=$logiciel2['nom']; ?></h3>
                        <p><?=$logiciel2['note']; ?></p>
                    </div>
                </div>
            </div>
                <?php }; ?>
        </div>

        
        <!-- Second line-->
        <div class="row mt-5">
            <!-- Infra --> 
            <?php 
                $req = $pdo->prepare('SELECT * FROM competences WHERE aled = "infra" '); 
                $req->execute();
                $infra = $req->fetchAll();
            ?>
            <div class="col text-center">
                <h2> Infra </h2>
                <?php 
                for($i = 0; $i <= count($infra) - 1; $i = $i + 2){
                    $infra1 = $infra[$i];
                    if($i+1 < count($infra)){
                        $infra2 = $infra[$i + 1];
                    } else{
                        $infra2 = array(
                            "nom" => "",
                            "note" => "",
                        );
                    };
            ?>
                <!-- row 1-->
                <div class="row mt-2">
                    <!-- col 1.1-->
                    <div class="col">
                        <h3><?=$infra1['nom']; ?></h3>
                        <p><?=$infra1['note']; ?></p>
                    </div>
                    <!-- col 1.2-->
                    <div class="col">
                        <h3><?=$infra2['nom']; ?></h3>
                        <p><?=$infra2['note']; ?></p>
                    </div>
                </div>
            </div>
                <?php }; ?>
        

            <!-- autre --> 
            <?php 
                $req = $pdo->prepare('SELECT * FROM competences WHERE aled = "autre" '); 
                $req->execute();
                $autre = $req->fetchAll();
            ?>
            <div class="col text-center">
                <h2>Autre</h2>
                <?php 
                for($i = 0; $i <= count($autre) - 1; $i = $i + 2){
                    $autre1 = $autre[$i];
                    if($i+1 < count($autre)){
                        $autre2 = $autre[$i + 1];
                    } else{
                        $autre2 = array(
                            "nom" => "",
                            "note" => "",
                        );
                    };
            ?>
                <!-- row 1-->
                <div class="row mt-2">
                    <!-- col 1.1-->
                    <div class="col">
                        <h3><?=$autre1['nom']; ?></h3>
                        <p><?=$autre1['note']; ?></p>
                    </div>
                    <!-- col 1.2-->
                    <div class="col">
                        <h3><?=$autre2['nom']; ?></h3>
                        <p><?=$autre2['note']; ?></p>
                    </div>
                </div>
            </div>
            <?php }; ?>
        </div>
    </div>


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


<!-- <h2>WEB</h2>
    <div class="note"> 
        <h3>HTML</h3>
        <p>La note</p>
    </div>
    <div class="note"> 
        <h3>CSS</h3>
        <p>La note</p>
    </div>
    <div class="note"> 
        <h3>PHP</h3>
        <p>La note</p>
    </div>
    <div class="note"> 
        <h3>SQL</h3>
        <p>La note</p>
    </div>
    <div class="note"> 
        <h3>JavaScript</h3>
        <p>La note</p>
    </div> -->