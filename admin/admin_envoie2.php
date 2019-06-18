<?php 
    include '../pdo.php';
    var_dump($_POST);
    foreach($_POST as $key){
        switch(explode())
    }

    switch(true){
        case isset($_POST["supp"]):
            $sql = "UPDATE info_perso SET description = ? WHERE id=";
            $q = $pdo->prepare($sql);
            $description = $_POST["description"];
            $q->execute(array($description));
            header("/admin.php");
            break;
        case isset($_POST["modif"]):
            echo("yes");
            break;
    };