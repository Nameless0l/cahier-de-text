<?php include "views/creation_cahier_texte.views.php"; ?>
<?php
include "config/database.php";

if(isset($_POST["retour"]))
{
  $classe = htmlspecialchars($_POST["classe"]);

  $nbreleve = htmlspecialchars($_POST["nbreleve"]);

  $nomcenseur = htmlspecialchars($_POST["censeur"]);

  $chef_classe = htmlspecialchars($_POST["chef"]);

  $prof_principale = htmlspecialchars($_POST["prof_principale"]);

  $matricule = htmlspecialchars($_POST["matricule"]);

  $emploidetemps = uploade("emploidetemps");
  $fichedeprogression = uploade("fichedeprogression");
  

  if(!empty($_POST["classe"]) AND !empty($_POST["chef"]) AND !empty($_POST["prof_principale"]) AND !empty($_POST["matricule"]) AND !empty($_POST["nbreleve"]) AND !empty($_POST["censeur"]))
  {
    echo "ca y ai";
        $ins_enseignant = $db -> prepare("INSERT INTO classes(nom_classe, nbre_eleve, censeur, chef_classe, prof_principal, emploi_temps,fiche_progression) VALUES(?,?,?,?,?,?,?)");
        $ins_enseignant -> execute(array($classe,$nbreleve,$nomcenseur,$chef_classe,$prof_principale,$emploidetemps,$fichedeprogression));

        $ins_cahiertext = $db -> prepare("INSERT INTO cahierdetexte(nom_classe,matricule_cens_en_charge) VALUES(?,?)");
        $ins_cahiertext -> execute(array($classe, $matricule));
        $erreur = "Le cahier a été créé";
  }
  else
  {
    $error = "veuillez remplir tous les champs";
  }
}

?>
<?php
if(isset($error))
{
  echo $error;
}
elseif(isset($alert))
{
  echo $alert;
}
?>