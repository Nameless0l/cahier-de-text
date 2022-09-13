<?php

/*cette fonction enregistre les données de l'enseigneur dans un cahier de text.*/
function Ajoutcours($id_enseignant, $id_matiere, $id_classe, $trimestre, $id_chapitre,$titre_module,$titre_lecon  
    , $numero_du_module, $exo_application, $corpus,  $activiteApprentissage,$opjectif_leçon,$plan_leçon ,$homework,$vu )
{

    require 'config/database.php';
    $vu = 0 ;
    $query1 = "INSERT INTO lecon (id_enseignant,id_matiere,id_classe,trimestre,id_chapitre,titre_module,
    titre_leçon  ,numero_du_module,exo_application,corpus,activite_apprentissage,opjectif_leçon ,plan_leçon,homework ,VU) 
    VALUES( '$id_enseignant','$id_matiere',
    '$id_classe',
    '$trimestre',
    '$id_chapitre',
    '$titre_module',
    '$titre_lecon'  ,
    '$numero_du_module','$exo_application','$corpus','$activiteApprentissage','$opjectif_leçon','$plan_leçon' ,'$homework' ,'$vu') ";
   
   
   $sql = $db->Prepare($query1);
    
   $sql->execute();
}

function VU($id){
    require 'config/database.php';
    $sql = "UPDATE lecon SET vu=1 WERE id_enseignant  = $id" ;
    $query = $db -> prepare($sql);
    $query -> execute();
}

function matiere_et_heure($id)
{
    require 'config/database.php';
    $sql  = "SELECT * FROM matieres WHERE id_enseignant = $id " ;
    $query = $db->prepare($sql);
    $query->execute() ;
    $elements = $query->fetchAll();
    return $elements ;


}
?>