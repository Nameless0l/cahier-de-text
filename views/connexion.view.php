<?php

use App\Model\User;

if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}
$error = null;
if (!empty($_POST)) {


    if (
        isset($_POST["pass"],  $_POST["email"])
        && !empty($_POST["pass"]) && !empty($_POST["email"])
    ) {
        require_once 'functions/selection_table.php';
        require_once 'config/database.php';
        
        // $table = Select_table($_POST["email"] ,$_POST["pass"]);
        if (Select_table($_POST["email"] ,$_POST["pass"]) != 'isEmpty') {
            // // connection db
            // $sql = "SELECT matricule FROM " . $table . " WHERE email= :email AND mot_de_pass= :pass";
            // $query = $db->prepare($sql);

            // $query->bindValue(":pass", $_POST["pass"], PDO::PARAM_STR); 
            // $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
            // //  $query->bindValue(":derniere_connexion", $derniere_connexion, PDO::PARAM_STR);

            // $query->execute();

            // $user = $query->fetch();
            // // $nm="Mbassss";
            // // $sql = "UPDATE " . Select_table($_POST["email"]) . " SET Nom=:Nom WHERE email= :email";
            // // $query = $db->prepare($sql);
            // // $query->execute(array(":Nom"=>$nm));

            // if (!$user) {
            //     $error = 'Email ou Mot de Passe incorrect ';
            // }
            if (!password_verify($_POST["pass"], $user["mot_de_pass"])) {

                $error = 'Email ou Mot dgdfgfte Passe incorrect ';
            }
            // ouverture de la sesson php
            // session_start();
            // $_SESSION["user"] = [
            //     "id_enseignant" => $user["id_enseignant"],
            //     "email" => $_POST["email"],
            //     "Nom" => $user["Nom"],
            //     "Prenom" => $user["Prenom"],
            //     "quartier" => $user["quartier"],
            //     "mot_de_pass" => $_POST["mot_de_pass"],
            //     "matieres" => $user["matieres"],
            //     "classes" => $user["classes"],
            //     "ville" => $user["ville"],
            //     "derniere_connexion" => $user["derniere_connexion"],
            //     "table" => $table
            // ];
            // $id_ensei= $_SESSION["user"]["id_enseignant"];
            header("Location: index.php");
        } else {
            $error = "Email ou Mot de Passe incorrect ";
        }
    } else {
       $error = 'Veillez remplir tout les champs';
    }
}
?>
<?php
$title = 'Connexion';
include 'partials/_header.php';
include 'config/constants.php';
?>

<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary">CONNEXION</h3>
                        </a>
                    </div>
                    <?php if ($error != null) :  ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif ?>
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Adresse Mail</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mot de Passe</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>