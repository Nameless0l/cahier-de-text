<?php

// require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php' ;
// function updateProfile($data){
//     include 'config/database.php';
//     $sql = $db->prepare('UPDATE censeur SET nom=:nom, email=:email, ville=:ville WHERE matricule=:matricule');
//     $result = $sql->execute([  
//     ]);
// }

// SELECT * FROM `cahier_de_texte`.`enseignant` WHERE `id` = 42 
?>

<?php 
require 'config/database.php';

function UpdateInfoProfile($data, $table_name){

        global $db ;

        $req = $db->prepare("UPDATE $table_name SET email = ?, mot_de_pass = ?, ville = ?, quartier = ?, nom = ?, prenom = ?  WHERE email = ? ");

        $password_hash = password_hash($data['password'], PASSWORD_ARGON2ID);
        
        $req->bindParam(1, $data['email'], PDO::PARAM_STR);
        $req->bindParam(2, $password_hash, PDO::PARAM_STR);
        $req->bindParam(3, $data['ville'], PDO::PARAM_STR);
        $req->bindParam(4, $data['quartier'], PDO::PARAM_STR);
        $req->bindParam(5, $data['nom'], PDO::PARAM_STR);
        $req->bindParam(6, $data['prenom'], PDO::PARAM_STR);
        $req->bindParam(7, $data['email'], PDO::PARAM_STR);

        $req->execute();

        $req->closeCursor();
     }
?>