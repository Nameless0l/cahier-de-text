<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php' ;
// function updateProfile($data){
//     include 'config/database.php';
//     $sql = $db->prepare('UPDATE censeur SET nom=:nom, email=:email, ville=:ville WHERE matricule=:matricule');
//     $result = $sql->execute([  
//     ]);
// }

// SELECT * FROM `cahier_de_texte`.`enseignant` WHERE `id` = 42 

     function UpdateInfoProfile($data, $table_name){


        $req = $db->prepare("UPDATE $table_name SET email = ?, mot_de_pass = ?, ville = ?, quartier = ?, nom = ?, prenom = ?  WHERE matricule = ? ");

        $req->bindParam(1, $data['email'], PDO::PARAM_STR);
        $req->bindParam(2, $data['password'], PDO::PARAM_STR);
        $req->bindParam(3, $data['ville'], PDO::PARAM_STR);
        $req->bindParam(4, $data['quartier'], PDO::PARAM_STR);
        $req->bindParam(5, $data['nom'], PDO::PARAM_STR);
        $req->bindParam(6, $data['prenom'], PDO::PARAM_STR);
        $req->bindParam(7, $data['matricule'], PDO::PARAM_STR);

        $req->execute();

        $req->closeCursor();
     }
?>