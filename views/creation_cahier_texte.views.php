<?php
$title = "création cahier de texte";
include "partials/_header.php";
include "fonctions/fonction_form.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
?>


<div class="hello">
  <p align = "center">Veuiller remplir ces information </p>
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



<?php include "partials/_footer.php"; ?>

