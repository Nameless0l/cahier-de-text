<?php
    $to = 'wwwmbassiloic@gmail.com';
    $subject = 'Utilisation de mail() avec PHP depuis Windows';
    $message = 'Salut comment ça va ?';
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    
</body>
</html>