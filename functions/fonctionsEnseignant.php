<?php

function Matieres ($id){

    require 'config/database.php';
    
    $sql= "SELECT *FROM matieres WHERE id_enseignant=$id";
    
    $query =$db-> prepare($sql);
    
    $query->execute();

    $enseignant_matieres = $query->fetchAll();
   
}
matieres(1);
?>