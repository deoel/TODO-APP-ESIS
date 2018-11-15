<?php
    $id_tache = $_GET['id_tache'];
    $description = $_POST['description'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $db=new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
    $a = 'UPDATE `tache` SET `id`=null,`description`=:ds,`date_debut`=:db,`date_fin`=:df WHERE id = :id';
    $d = array(
        "id"=>$id_tache,
        "ds"=>$description,
        "db"=>$date_debut,
        "df"=>$date_fin
    );
    $res = $db->prepare($a);
    $res->execute($d);

    echo 'Tache modifiee avec succee <a href="index.php">listes des taches</a>';
?>
