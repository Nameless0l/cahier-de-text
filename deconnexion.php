<?php


session_start();

if(isset($_SESSION["user"])){

    session_destroy();
    header("Location: connexion.php");
    exit;
}


unset($_SESSION["user"]);

header("Location: index.php");

?>