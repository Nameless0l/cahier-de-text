<?php

function updatePassword($mail,$table_name)
{
    include 'config/database.php';

    $newPassword;
    $pageconfirmation='htttps//confirmation.';
    $to = 'wwwmbassiloic@gmail.com';
    $subject = 'Changer mon mot de Passe';
    $message = 'Salut comment ça va ?';

    $sql = "SELECT * FROM mot_de_pass WHERE mail='$mail'";
    $query = $db->prepare($sql);
    $query->execute();

    
    // $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    // $headers = $headers."From: kemdjesamuel@gmail.com\r\n";

    $headers = array(
        'From' => 'wwwmbassiloic@gmail.com',
        'Reply-To' => 'wwwmbassiloic@gmail.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );

    if (mail($to, $subject, $message, $headers)){
        echo 'Envoyé !';
    }
    else{ 
        echo 'Erreur envoi';
    }




    $dte = "UPDATE $table_name  SET derniere_connexion =$newPassword  WHERE email= '$email'";
    $query1 = $db->prepare($dte);
    $query1->execute();
}
