

<?php
include "config/database.php";

?>



<?php
//this page permit the treatment of data from the modification formula and contains the request for update a data of formula of the teacher
try {

    if (!empty($_POST)) {
        
        
        if (isset(($_POST['nom'])) || isset($_POST['prenom']) || isset($_POST['email'])) {
            $pdoStat = $db->prepare('UPDATE enseignant set nom=:nom, Prenom=:prenom ,email=:email WHERE matricule=:matricule LIMIT 1');
            $pdoStat->bindValue(':matricule', $_POST['matricule'], PDO::PARAM_STR_CHAR);
            $pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
            $pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
            $pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
            
            $executeIsok = $pdoStat->execute();
            echo ("modification effectuee");
            header('Location:teacher.php');
                            die();
        }
    }
    
   
} catch (PDOException $e) {

    die($e);
}

?>

