<?php

if (!empty($_POST)) {
 

  if(isset($_POST["nom"],$_POST["pass"],$_POST["email"])
  && !empty($_POST["nom"])&& !empty($_POST["email"]) && !empty($_POST["pass"])){
    $pseudo=strip_tags($_POST["nom"]);

    if(!filter_var($_POST["email"],FILTER_SANITIZE_EMAIL)){
      die('adress email incorrect');
    }
    //hashons le mot de pass
    $pass = password_hash($_POST["pass"],PASSWORD_ARGON2ID);
    require_once '../config/database.php';
    
    // controles souhaités sur l'unicité des matricule


    $sql = "INSERT INTO enseignant (Nom,Prenom,matieres) VALUES(
      :pseudo, :email,'$pass')";
  $query= $db ->prepare($sql);

  $query->bindValue(":pseudo",$pseudo,PDO::PARAM_STR);
  $query->bindValue(":email",$_POST["email"],PDO::PARAM_STR);
  $query->execute();
  
}else {
    die('formulaire incomplet');
  }
}


$title='Ajout d\'un Enseignant';
include '../partials/_header.php';
?>
<form method="post">
  <div>
    <label for="nom_enseignant">Nom</label>
    <input type="text" name="nom" id="nom_enseignant">
  </div>
  <div>
    <label type="password" name="" id="">Mot de pass</label>
    <input type="password" name="pass" id="password">
  </div>
  <div>
<label for="Mail">Mail</label>
<input type="email" name="email" id="Mail">
  </div>
<div>
  <button type="submit">Valider</button>
</div>

</form>
<?php
include '../partials/_footer.php';
?>