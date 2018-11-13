<?php
    include_once('entete.php');
?>
<h3>Creer une nouvelle tache</h3>
<form method="post" action="creer_tache.php">
    Description : <input type="text" name="description" /><br/>
    Date debut  : <input type="date" name="date_debut" /><br />
    Date fin    : <input type="date" name="date_fin" /> <br/>
                  <input type="submit" value="Creer" />
</form>