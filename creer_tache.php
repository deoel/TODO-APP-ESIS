<?php

    // recuperation des données du formulaire de creation de nouvelle tâche
    $description = $_POST['description'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];

    if(empty($description))
    {
        echo "Il faut remplir la description";
        echo '<a href="nouvelle_tache.php"> Recommencer</a>';
    }
    else
    {
        // enregistrer la tâche dans la base de données
        $db = new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');

        $rq = 'INSERT INTO tache VALUES(null, :des, :dd, :df)';
        $v = array(
            'des' => $description,
            'dd' => $date_debut,
            'df' => $date_fin
        );

        $res = $db->prepare($rq);
        $res->execute($v);

        echo "Tache creee<br/>";
        echo '<a href="index.php">Afficher mes taches</a>';

    }
?>