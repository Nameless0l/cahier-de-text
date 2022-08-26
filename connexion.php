<?php
use App\Model\User;

$errors = [];

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

        $user = $query->fetch(PDO::FETCH_ASSOC);
        // $nm="Mbassss";
        $sql="UPDATE ".Select_table($_POST["email"])." SET Nom=:Nom WHERE email= :email";
        $query = $db->prepare($sql);
        // $query->execute(array(":Nom"=>$nm));
    
        if (!$user) {
            $errors[] = "Email ou Mot de passe incorrect ";
        }
        if (!password_verify($_POST["pass"], $user["mot_de_pass"])) {
            $errors[] = "Email ou Mot de passe incorrect ";
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
        
    } else {
        $errors ='Veuillez remplir tous les champs';
    }

    if(count($errors)==0){
        header("Location: index.php");
    }else{
        header("Location: connexion.php");
    }
}
?>


<?php
include 'views/connexion.view.php'
?>