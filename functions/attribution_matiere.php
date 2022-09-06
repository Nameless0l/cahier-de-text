<?php
function attribuer ($id_enseignant,$id_classe,$cycle , $nom_matiere,$nom_classe,$heure)
{

    require 'config/database.php';

    $sql = "INSERT INTO  matieres  (id_classe , id_enseignant ,cycle , nom_matiere,nom_classe,horaire) 
    VALUES ('$id_enseignant', '$id_classe', '$cycle' , '$nom_matiere' , '$nom_classe' , '$heure' ) ";
   
    $query = $db->prepare($sql);
    
    $query->execute();
}

?>