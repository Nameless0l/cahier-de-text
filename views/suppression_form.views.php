<?php
//this page contain a request to delete all data of a teacher
    include "config/database.php";
    

 
    $pdoStat= $db->prepare('DELETE FROM enseignant WHERE matricule=:matricule LIMIT 1');

    $pdoStat->bindValue(':matricule',$_GET['matricule'],PDO::PARAM_STR_CHAR);
    $executeIsok=$pdoStat->execute(); 
    
    if($executeIsok){
        $message="suppression effectue";
        header('Location:teacher.php');
                            die();
    }
    else{
        $message="echec lors de la suppression";
        header('Location:teacher.php');
                            die();
    }

?>
    <p><?=$message?></p>