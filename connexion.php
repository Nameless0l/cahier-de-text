<?php include 'config/database.php';  ?>
<?php include 'functions/functions.php';  ?>

<?php
$errors = [];
// var_dump($_POST);
if (isset($_POST['submit'])) {
    global $db;
    // echo 'yo';
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        extract($_POST);

        // $errorsvar_dump($_POST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors[] = "Adresse Email invalide!";


        $reponse = $db->query("SELECT * FROM enseignant WHERE email = '$email'");
        $reponse->setFetchMode(PDO::FETCH_ASSOC);
        $user = $reponse->fetch();
        // var_dump($user);

        if (!password_verify($pass, $user['mot_de_pass']))
            $errors[] = "Mot de passe erroné";

        // var_dump($errors);

        if (count($errors) == 0) {
           
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
                "table" => $table
            ];
            header('Location: index.php');
        } else {
            header('Location: connexion.php');
        }
    }
}
?>

<?php include 'views/connexion.view.php' ?>