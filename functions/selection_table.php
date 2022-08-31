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
            // $passwordhash = $_SESSION["user"]["mot_de_pass"];
            $passwordhash =  $user["mot_de_pass"];
            if (!password_verify($password, $passwordhash)) {
                var_dump(password_verify($password, $passwordhash));
                var_dump($passwordhash);
                return 'isEmpty';
            }else {

                $dte="UPDATE $table_name  SET derniere_connexion = CURRENT_TIMESTAMP WHERE email= '$email'" ;
                // $query1->bindValue(":email", htmlentities($email), PDO::PARAM_STR);
    
                $query1= $db->prepare($dte);
                $query1->execute();
                switch ($table_name) {
                    case 'enseignant':
                        $_SESSION["user"] = [
                            "id" => $user["id_enseignant"],
                            "email" => $_POST["email"],
                            "Nom" => $user["Nom"],
                            "Prenom" => $user["Prenom"],
                            "matricule"=>$user["matricule"],
                            "quartier" => $user["quartier"],
                            "mot_de_pass" => $user["mot_de_pass"],
                            "matieres" => $user["matieres"],
                            "classes" => $user["classes"],
                            "ville" => $user["ville"],
                            "derniere_connexion" => $user["derniere_connexion"],
                            "table" => $table_name
                        ];
                        break;
                    case 'censeur':
                        $_SESSION["user"] = [
                            "id" => $user["id_cens"],
                            "email" => $_POST["email"],
                            "Nom" => $user["Nom"],
                            "Prenom" => $user["Prenom"],
                            "matricule"=>$user["matricule_cens"],
                            "quartier" => $user["quartier"],
                            "mot_de_pass" => $user["mot_de_pass"],
                            "matieres" => $user["matieres"],
                            "classes" => $user["classes"],
                            "ville" => $user["ville"],
                            "derniere_connexion" => $user["derniere_connexion"],
                            "table" => $table_name
                        ];
                        break ;
                        case 'inspecteur':
                            $_SESSION["user"] = [
                                "id" => $user["id"],
                                "email" => $_POST["email"],
                                "Nom" => $user["Nom"],
                                "Prenom" => $user["Prenom"],
                                "mot_de_pass" => $user["mot_de_pass"],
                                "matricule"=>$user["matricule"],
                                "matieres" => $user["matieres"],
                                "derniere_connexion" => $user["derniere_connexion"],
                                "table" => $table_name
                            ];
                            break ;
                            case 'eleve':
                                $_SESSION["user"] = [
                                    "id" => $user["id"],
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
                                break ;
                                case 'parent':
                                    $_SESSION["user"] = [
                                        "id_" => $user["id"],
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
                                    break ;
                    default:
                        # code...
                        break;
                }
                // die($user["mot_de_pass"]);
                return $table_name;
            }
        }
    }
    return 'isEmpty';
}
