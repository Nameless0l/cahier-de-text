<?php

function Select_table(string $email):string
{
    $table = [
        "enseignant",
        "censeur",
        "inspecteur",
        "eleve",
        "parent",
    ];

    $erreur= '';

    require 'config/database.php';

    foreach ($table as $table_name) {

        $sql = "SELECT * FROM $table_name WHERE email= :email";

        $query = $db->prepare($sql);

        $query->bindValue(":email", $email, PDO::PARAM_STR);

        $query->execute();

        $user = $query->fetch();
        
        var_dump($user);

        if ($user) {
            $erreur="iwdukjeff";
            return $table_name;}

    }
    header('Location:connexion.php');

}
?>