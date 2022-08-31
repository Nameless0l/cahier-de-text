<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php' ;
// function updateProfile($data){
//     include 'config/database.php';
//     $sql = $db->prepare('UPDATE censeur SET nom=:nom, email=:email, ville=:ville WHERE matricule=:matricule');
//     $result = $sql->execute([  
//     ]);
// }

// SELECT * FROM `cahier_de_texte`.`enseignant` WHERE `id` = 42 
?>

<?php 
     function UpdateInfoProfile($data, $table_name){

        global $db;
        $datas = [];

        foreach ($data as $key => $value) {
            $datas[] = $value;
        }

        $req = $db->prepare("UPDATE $table_name SET email = :email, mot_de_pass = :password, ville = :ville, quartier = :quartier, nom  ");

        $req->execute($data);

        $req->closeCursor();
     }
?>