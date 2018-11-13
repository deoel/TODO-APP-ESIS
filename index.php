<?php
    include_once('entete.php');
?>

<h3>Liste de mes taches</h3>
<?php
    $db = new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
    $rq = 'SELECT * FROM tache';
    $v = array();
    $res = $db->prepare($rq);
    $res->execute($v);

    $i = 1;
    while($t = $res->fetch(PDO::FETCH_OBJ))
    {
        echo '
            <p>
                <strong>'.$i.'.</strong> 
                <em>du '.$t->date_debut.'</em>
                <em>au '.$t->date_fin.'</em>,
                '.$t->description.'
                <a href="conf_sup_tache.php?id_tache='.$t->id.'">Supprimer</a>
            </p>
        ';
        $i++;
    }
?>
