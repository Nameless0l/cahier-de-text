<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=cahier_de_texte;charset=utf8", "root", "");

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
        $ins_enseignant = $bdd -> prepare("INSERT INTO classes(nom_classe, nbre_eleve, censeur, chef_classe, prof_principal, emploi_temps,fiche_progression) VALUES(?,?,?,?,?,?,?)");
        $ins_enseignant -> execute(array($classe,$nbreleve,$nomcenseur,$chef_classe,$prof_principale,$emploidetemps,$fichedeprogression));

        $ins_cahiertext = $bdd -> prepare("INSERT INTO cahierdetexte(nom_classe,matricule_cens_en_charge) VALUES(?,?)");
        $ins_cahiertext -> execute(array($classe, $matricule));
        $erreur = "Le cahier a été créé";
  }
  else
  {
    $error = "veuillez remplir tous les champs";
  }
}

?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title>Cahier de texte</title>
    <link rel="stylesheet" href="document/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"/>
    <script src="app.js"></script>
</head>

<body>


<h2 class="text" align = "center">CREATION CAHIER DE TEXTE</h2>

<div class="hello">
  <p align = "center">Veuiller entrer les informations le concernant</p>
    <form method="POST" action="" enctype="multipart/form-data">
       <table align="center">
         <tr>
           <td align= "left"><label for="classe">Classe :</label></td>
           <td><input type="text" name="classe" id="classe"  value="<?php if(isset($classe)){ echo $classe;} ?>"></td>
         </tr>

          <tr>
           <td align= "left"><label for="nbreleve">Nombre d'élève :</label></td>
           <td><input type="text" name="nbreleve" id="nbreleve"  value="<?php if(isset($classe)){ echo $classe;} ?>"></td>
         </tr> 

         <tr>
           <td align= "left"><label for="censeur">Votre nom :</label></td>
           <td><input type="text" name="censeur" id="censeur"  value="<?php if(isset($classe)){ echo $classe;} ?>"></td>
         </tr> 

        <tr>
          <td align= "left"><label for = "chef">Chef de classe :</label></td>
          <td><input type="text" name="chef" id="chef"  value="<?php if(isset($chef_classe)){ echo $chef_classe;} ?>"></td>
        </tr>

        <tr>
          <td align= "left"><label for = "prof_principale">Prof_principale :</label></td>
          <td><input type="text" name="prof_principale" id="prof_principale"  value="<?php if(isset($prof_principale)){ echo $prof_principale;} ?>"></td>
        </tr>

        <tr>
          <td align= "left"><label for = "matricule">Votre matricule :</label></td>
          <td><input type="text" name="matricule" id="matricule"  value="<?php if(isset($matricule)){ echo $matricule;} ?>"></td>
        </tr>

        <tr>
          <td align= "left"><label for="emploidetemps">Emploi de temps :</label></td>
          <td><input type="file" name="emploidetemps" id="emploidetemps"></td>
       </tr>

      <tr>
          <td align= "left"><label for="fichedeprogression">Fiche de progression :</label></td>
          <td><input type="file" name="fichedeprogression" id="fichedeprogression"></td>
       </tr>

    <tr>
      <td></td>
      <td style="text-align: right;"><input type="submit" name="retour" value="Créer"></td>
    </tr>

</table>
</form>
</div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>
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