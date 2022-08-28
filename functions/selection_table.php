<?php

function Select_table(string $email, string $password): string
{
    $table = [
        "enseignant",
        "censeur",
        "inspecteur",
        "eleve",
        "parent",
    ];
    $passwordhash = '';
    
    require 'config/database.php';

    foreach ($table as $table_name) {

        $sql  = "SELECT * FROM $table_name WHERE email= :email";

        $query = $db->prepare($sql);

        $query->bindValue(":email", htmlentities($email), PDO::PARAM_STR);

        $query->execute();
        $user = $query->fetch();

        if ($user) {
            session_start();
            $_SESSION["user"] = [
                "id_enseignant" => $user["id_enseignant"],
                "email" => $_POST["email"],
                "Nom" => $user["Nom"],
                "Prenom" => $user["Prenom"],
                "quartier" => $user["quartier"],
                "mot_de_pass" => $user["mot_de_pass"],
                "matieres" => $user["matieres"],
                "classes" => $user["classes"],
                "ville" => $user["ville"],
                "derniere_connexion" => $user["derniere_connexion"],
                "table" => $table_name
            ];
            $passwordhash = $_SESSION["user"]["mot_de_pass"];
            if (!password_verify($password, $passwordhash)) {
                var_dump(password_verify($password, $passwordhash));
                var_dump($passwordhash);
                return 'isEmpty';
            }else return $table_name;
        }
    }
    return 'isEmpty';
}
