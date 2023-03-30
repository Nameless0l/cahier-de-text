<?php 
include "functions/updateProfile.php" ;
session_start();
$Nom = $_SESSION["user"]["Nom"];
$Prenom = $_SESSION["user"]["Prenom"] ;

$email =$_SESSION["user"]["email"]  ;
$password = $_SESSION["user"]["mot_de_pass"];

$matricule = $_SESSION["user"]["matricule"];
$ville = $_SESSION["user"]["ville"];
$quartier = $_SESSION["user"]["quartier"];

$table_name = $_SESSION["user"]["table"];
?>

<?php
    if(isset($_POST['updateProfile'])){

        $data = $_POST;

        UpdateInfoProfile($data, 'censeur');
    }
?>


<?php include "views/profile.views.php"; ?>