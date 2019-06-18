<?php 
    include '../pdo.php';
    var_dump($_POST);
    if(isset($_POST["description"])){
        $sql = "UPDATE info_perso SET description = ? WHERE id=1";
        $q = $pdo->prepare($sql);
        $description = $_POST["description"];
        $q->execute(array($description));
        header("/admin.php");
    }
   