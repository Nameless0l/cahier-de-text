<?php

$id_censeur = $_SESSION['user']['id'];
$query = $db->query("SELECT * FROM classes WHERE id_censeur_charge = '$id_censeur'");
    $run_query =  $query->rowCount();
?>


<div class="hello">
  <p align = "center">Veuiller remplir ces informations </p>
    <form method="POST" action="" enctype="multipart/form-data">
       <table align="center">
         <tr>
           <td align= "left">Classe :</td>
           <td><select name="classroom" id="classroom">
         
            <?php 

            if($run_query > 0){

              echo "<option value=''>Select </option>";

            while($resultat = $query->fetch()){ ?>
            <option value="<?php echo $resultat['id'];?>"> <?php echo $resultat['nom_classe'];?> </option>
            <?php
            }
          }
          ?>  
          </select>
            
         </tr>


        <tr>
          <td align= "left">Chef de classe :</td>
          <td>
          <select name="student" id="student">
          
              <option value="">selectionner le chef de classe</option>
              
              </select>
            </td>
        </tr>

        <tr>

          <td align= "left">Enseignant principal :</td>
          
          <td>
          <select name="ens_principal" id="ens_principal">
            <option value="">Désigner un enseignant comme principal </option>
          </select>
          </td>

        </tr>


        <tr>
          <td align= "left"><label for="emploidetemps">Emploi de temps :</label></td>
          <td><input type="file" name="emploidetemps" id="emploidetemps"></td>
       </tr>

      <!-- <tr>
          <td align= "left"><label for="fichedeprogression">Fiche de progression :</label></td>
          <td><input type="file" name="fichedeprogression" id="fichedeprogression"></td>
       </tr> -->

    <tr>
      <td></td>
      <td style="text-align: right;"><input type="submit" name="retour" value="Créer"></td>
    </tr>

</table>
</form>
</div>

<?php include "partials/_footer.php"; ?>
