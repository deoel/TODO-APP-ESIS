<?php
    $id_tache = $_GET['id_tache'];
    
    echo 'Voulez-vous vraiment supprimer cette tache? ';

    echo '<a href="index.php">Non</a> / ';
    echo '<a href="supprimer_tache.php?id_tache='.$id_tache.'">Oui</a>';
?>