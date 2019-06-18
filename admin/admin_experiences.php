<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CV - admin</title>
    <?php include '../pdo.php'; ?>
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
                            <a class="nav-link" href="../info_perso.php" >Qui suis-je?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../competences.php" >Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../projets.php" >Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../formation.php" >Formation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../experience.php" >Expériences</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container-fluid" style="height: 920px">
            <div class="row h-100">
                <div class="col-2 bg-dark pt-3">
                    <h2>Gestion :</h2>
                    <ul>
                        <a class="btn" href="./admin.php"><h3> info_perso</h3></a>
                        <a class="btn" href="./admin_competences.php"><h3> Compétences</h3></a>
                        <a class="btn" href="./admin_projets.php"><h3> Projets</h3></a>
                        <a class="btn" href="./admin_formations.php"><h3> Formation</h3></a>
                        <a class="btn" href="./admin_experiences.php"><h3> Experience</h3></a>
                    </ul>
                </div>
                <div class="col pt-3">
                    
                <?php 
                $req = $pdo->prepare('SELECT * FROM experiences'); 
                $req->execute();
                $experience = $req->fetchAll();
                ?> 
                <?php 
                    foreach($experience as $key){
                ?>
                    <form>
                        <div class="row mt-3">
                        
                            <div class="col-md-auto text-center">
                                <h2><?=$key['nom'] ?></h2>
                                <input type="text" class="form-control" id="note" placeholder="note" value="<?=$key['lieu'] ?>">
                                <input type="text" class="form-control" id="note" placeholder="note" value="<?=$key['date'] ?>">
                                        
                            </div>
                            <div class="col mt-3">
                                <textarea class="form-control" id="Description" rows="3"><?=$key['description'] ?></textarea>
                            </div>
                        </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary m-2">Modifier</button>
                                <button type="submit" class="btn btn-primary m-2">Supprimer</button>
                            </div>
                    </form>
                    <?php }; ?>
                </div>
            </div>  
        </div>
</body>