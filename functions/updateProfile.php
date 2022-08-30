<?php


// function updateProfile($data){
//     include 'config/database.php';
//     $sql = $db->prepare('UPDATE censeur SET nom=:nom, email=:email, ville=:ville WHERE matricule=:matricule');
//     $result = $sql->execute([  
//     ]);
// }


require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'Update.user.php' ;

$user = new UpdateProfile();
var_dump($user);