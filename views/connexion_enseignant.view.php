<?php

use App\Model\User;

if (!empty($_POST)) {


    if (
        isset($_POST["pass"],  $_POST["email"])
        && !empty($_POST["pass"]) && !empty($_POST["email"])
    ) {
        // $pass = strip_tags($_POST["nom"]);
        // $email = strip_tags($_POST["email"]);
        
        require_once 'functions/selection_table.php';
        require_once 'config/database.php';
     

        // controles souhaités sur l'unicité des emails

        // connection db
        $sql = "SELECT * FROM ".Select_table($_POST["email"])." WHERE email= :email";
        $query = $db->prepare($sql);

        // $query->bindValue(":pass", $nom, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);

        $query->execute();

        $user = $query->fetch();
        if (!$user) {
            die("email  ou mot de pass incorrecte ");
        }
        if (!password_verify($_POST["pass"], $user["mot_de_pass"])) {

            die("email  ou jehjhrejmot de pass incorrecte ");
        }
        // ouverture de la sesson php
    session_start();
    $_SESSION["user"]=[
        "id_enseignant"=>$user["id_enseignant"],
        "email"=>$user["email"],
        "Nom"=>$user["Nom"],
        "Prenom"=>$user["Prenom"],
        "quartier"=>$user["quartier"],
        "mot_de_pass"=>$user["mot_de_pass"],
        "matieres"=>$user["matieres"],
        "classes"=>$user["classes"],
        "ville"=>$user["ville"],
    ];
    header("Location:");
    } else {
        die('formulaire incomplet');
    }
}
?>
<?php
$title = 'Enseignant';
include 'partials/_header.php';
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
?>

<div>

    <form class="row g-3 needs-validation" method="post">

        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="validationCustom01" required="required" placeholder=" Entrer votre mancule ici">

        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Mot de pass</label>
            <input type="password" name="pass" class="form-control" id="validationCustom01" required="required" placeholder="Password">
        </div>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">se connecter</button>
</div>
</form>
</div>
<?php
include 'partials/_footer.php';
?>