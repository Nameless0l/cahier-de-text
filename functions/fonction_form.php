<?php
function uploade_image($nom)
{
 
  $emploidetemps = $_FILES[$nom]["name"];//c'est le nom du fichier que l'on uploade

  $type = $_FILES[$nom]["type"];

  $taille = $_FILES[$nom]["size"];

  $fichier_temporaire = $_FILES[$nom]["tmp_name"];//

  $erreur = $_FILES[$nom]["error"];

  $destination = "document/".$emploidetemps;//c'est le chemin qui permettra de stocker notre fichier dans le dossier document

  $extensionvalide = array("jpg", "jpeg", "png", "gif");//ce sont les extensions valides qu'on peut accepter d'uploader

 $type_emploidetemps = ["$nom/jpg", "$nom/jpeg", "$nom/png", "$nom/gif"];

 $extension = explode(".", $emploidetemps);//permet d'obtenir l'extension du fichier que l'on uploade


 
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

<?php
function uploade_files_pdf($nom)
{
 
  $emploidetemps = $_FILES[$nom]["name"];//c'est le nom du fichier que l'on uploade

  $type = $_FILES[$nom]["type"];

  $taille = $_FILES[$nom]["size"];

  $fichier_temporaire = $_FILES[$nom]["tmp_name"];//

  $erreur = $_FILES[$nom]["error"];

  $destination = "document/".$emploidetemps;//c'est le chemin qui permettra de stocker notre fichier dans le dossier document

  $extensionvalide = array(".pdf", ".PDF");//ce sont les extensions valides qu'on peut accepter d'uploader

 $extension = strrchr($emploidetemps,".");//permet d'obtenir l'extension du fichier que l'on uploade


 
    if(in_array($extension, $extensionvalide)) //strtolower(end($extension))permet de tranformer les lettres de l'extension du fichier entré par l'utilsateur en minuscule 
    {
        if($erreur == 0)
         {
             if(move_uploaded_file($fichier_temporaire,$destination))//permet de deplacer le fichier uploade du repertoire temporaire vers document
             {
              echo "uploade effectue";
             }
             else
             {
               echo "erreur";
             }
         }
         else
         {
          echo "erreur";
         }
    }
    else
    {
       echo "seuls les fichiers PDF sont autorisés";
    }
return $emploidetemps;
}
?>