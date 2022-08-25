<?php
function uploade($nom)
{
 
  $emploidetemps = $_FILES[$nom]["name"];

  $type = $_FILES[$nom]["type"];

  $taille = $_FILES[$nom]["size"];

  $fichier_temporaire = $_FILES[$nom]["tmp_name"];

  $erreur = $_FILES[$nom]["error"];

  $destination = "document/".$emploidetemps;

  $extensionvalide = array("jpg", "jpeg", "png", "gif");

 $type_emploidetemps = ["$nom/jpg", "$nom/jpeg", "$nom/png", "$nom/gif"];

 $extension = explode(".", $emploidetemps);


 
    if(count($extension) <= 2 && in_array(strtolower(end($extension)), $extensionvalide))
    {
        if($erreur == 0)
        {
            if(move_uploaded_file($fichier_temporaire,$destination))
            {
              $alert = "uploade effectue";
            }
            else
            {
              $error = "erreur";
            }
        }
        else
        {
          $error = "error";
        }
    }
return $emploidetemps;
}



?>