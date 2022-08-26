<?php

use App\Model\User;

session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
    exit ;
}

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
        $sql = "SELECT * FROM " .$table= Select_table($_POST["email"]) . " WHERE email= :email";
        $query = $db->prepare($sql);

        // $query->bindValue(":pass", $nom, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        //  $query->bindValue(":derniere_connexion", $derniere_connexion, PDO::PARAM_STR);

        $query->execute();

        $user = $query->fetch();
        // $nm="Mbassss";
        $sql="UPDATE ".Select_table($_POST["email"])." SET Nom=:Nom WHERE email= :email";
        $query = $db->prepare($sql);
        // $query->execute(array(":Nom"=>$nm));
    
        if (!$user) {
            die("email  ou mot de pass incorrecte ");
        }
        if (!password_verify($_POST["pass"], $user["mot_de_pass"])) {

            die("email  ou jehjhrejmot de pass incorrecte ");
        }
        // ouverture de la sesson php
        session_start();
        $_SESSION["user"] = [
            "id_enseignant" => $user["id_enseignant"],
            "email" => $_POST["email"],
            "Nom" => $user["Nom"],
            "Prenom" => $user["Prenom"],
            "quartier" => $user["quartier"],
            "mot_de_pass" => $_POST["mot_de_pass"],
            "matieres" => $user["matieres"],
            "classes" => $user["classes"],
            "ville" => $user["ville"],
            "derniere_connexion" => $user["derniere_connexion"],
            "table"=> $table
        ];
        // $id_ensei= $_SESSION["user"]["id_enseignant"];
        header("Location: index.php");
    } else {
        die('formulaire incomplet');
    }
}

?>
<?php
$title = 'Enseignant';
include 'partials/_header.php';
?>

<!-- 1 -->
<!-- <div class="col-md-12 pt-2">

    <form class="needs-validation" method="post">
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="validationCustom01" required="required" placeholder=" Entrer votre mancule ici">

        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Mot de pass</label>
            <input type="password" name="pass" class="form-control" id="validationCustom01" required="required" placeholder="Password">
        </div>
        <div class="col- md-6 pt-2 ">
            <p>
                <button class="btn btn-primary" type="submit">se connecter</button>
            </p>
        </div>
</div>
</form>
</div> -->

<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                       <form method="post">
                       <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                       </form>
                        <p class="text-center mb-0">Don't have an Account? <a href="#">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
  <!-- 1 -->