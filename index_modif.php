<?php
    include_once('entete.php');
?>
<h3>MODIFICATION DE TACHES</h3>
<?php
    $id = $_GET['id_tache'];
    
echo ' <form method="post" action="modif.php?id_tache='.$id.'">
    Description : <input type="text" name="description" /><br/>
    Date debut  : <input type="date" name="date_debut" /><br />
    Date fin    : <input type="date" name="date_fin" /> <br/>
                  <input type="submit" value="modifier" />
</form>';
?>