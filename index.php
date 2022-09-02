<?php 
session_start();

if(isset($_POST['notifier'])){
    
    if (1) {
        echo 'Veuillez remplir tous les champs';
        if (1){
          SendMesg((int)$_SESSION["user"]["id"],(int)$_POST["id"],$_SESSION["user"]["Nom"],$_POST["message"],$_SESSION["user"]["table"]);
        } else {
          die('formulaire incomplet');
        }
      }
}

include "views/index.views.php"; 
?>