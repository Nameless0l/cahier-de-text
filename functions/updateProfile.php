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
$data=[
        "email"=>"aronloic@gmail.com",
        "password" => "prunelle",
        "quartier"=>"test",
        "ville"=>"ville test",
        "nom"=>"Ch",
        "prenom"=>"Chantal",
];


function UpdateInfoProfile($data, $table_name){

        global $db ;

        $req = $db->prepare("UPDATE $table_name SET mot_de_pass = ?, ville = ?, quartier = ?, nom = ?, prenom = ?  WHERE email = ? ");

        $password_hash = password_hash($data['password'], PASSWORD_ARGON2ID);
        
        $req->bindParam(1, $password_hash, PDO::PARAM_STR);
        $req->bindParam(2, $data['ville'], PDO::PARAM_STR);
        $req->bindParam(3, $data['quartier'], PDO::PARAM_STR);
        $req->bindParam(4, $data['nom'], PDO::PARAM_STR);
        $req->bindParam(5, $data['prenom'], PDO::PARAM_STR);
        $req->bindParam(6, $data['email'], PDO::PARAM_STR);

        $req->execute();

        $req->closeCursor();
     }

//      UpdateInfoProfile($data,'censeur');
?>
