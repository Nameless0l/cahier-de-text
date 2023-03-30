<?php
include "config/database.php";

?>



<?php
//this page permit the treatment of data from the modification formula and contains the request for update a data of formula of the teacher
try {

    if (!empty($_POST)) {
        
        
        if (isset($_POST['titre']) || isset($_POST['objectif']) || isset($_POST['objet']) || isset($_POST['activite']) || isset($_POST['aplication']) || isset($_POST['devoir'])) {
            $pdoStat = $db->prepare('UPDATE lecon set titre_leçon =:titre ,opjectif_leçon=:objectif,corpus=:objet,activite_apprentissage=:activite,exo_application=:aplication, 	homework=:devoir WHERE id=:id LIMIT 1');
            echo'correcte';
            $pdoStat->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
            $pdoStat->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR_CHAR);
            $pdoStat->bindValue(':objectif', $_POST['objectif'], PDO::PARAM_STR_CHAR);
            $pdoStat->bindValue(':objet', $_POST['objet'], PDO::PARAM_STR_CHAR);
            $pdoStat->bindValue(':activite', $_POST['activite'], PDO::PARAM_STR_CHAR);
            $pdoStat->bindValue(':aplication', $_POST['aplication'], PDO::PARAM_STR_CHAR);
            $pdoStat->bindValue(':devoir', $_POST['devoir'], PDO::PARAM_STR_CHAR);

            $executeIsok = $pdoStat->execute();
            echo ("modification effectuee");
            header("Location:http:update_lecon.php?id=".$_POST['id']);
                            die();
        }
    }
    
   
} catch (PDOException $e) {

    die($e);
}

?>

