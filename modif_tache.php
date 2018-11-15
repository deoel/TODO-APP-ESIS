<?php
    $id_tache = $_GET['id_tache'];

    echo 'Etes vous sure de vouloir modifié catte tache? ';

    echo '<a href="index.php">non je ne suis pas sure</a> / ';
    echo '<a href="index_modif.php?id_tache='.$id_tache.'">oui je suis sure</a> ';
?>
