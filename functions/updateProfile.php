<?php
include 'config/database.php';

function updateProfile($data){
    
    $sql = $db->prepare('UPDATE censeur SET nom=:nom, email=:email, ville=:ville WHERE matricule=:matricule');
    $result = $sql->execute([
        
    ]);
}